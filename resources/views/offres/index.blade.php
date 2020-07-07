@extends('layouts.app')
@section('content')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card"> <a class="btn btn-light btn-sm" href="{{ route('offres.create') }}"><h3>Ajouter un offre</h3></a></div>
    <div class="card">
        <header class="card-header">
            <div> <p class="card-header-title"> <h1> Vos Offres D'emploi</h1></div>

        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Titre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($offres as $offre)
                        <tr @if($offre->deleted_at) class="has-background-grey-lighter" @endif>
                            <td>{{ $offre->id }}</td>
                            <td><strong>{{ $offre->titre_emploi }}</strong></td>
                            <td>
                                @if($offre->deleted_at)
                                    <form action="{{route('offres.store', $offre->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="button is-primary" type="submit">Restaurer</button>
                                    </form>
                                @else
                                    <a class="button is-primary" href="{{ route('offres.show', $offre->id) }}">Voir</a>
                            @endif </td>
                            <td>
                                @if($offre->deleted_at)
                                @else
                                    <a class="button is-warning" href="{{ route('offres.edit', $offre->id) }}">Modifier</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route($offre->deleted_at? 'offres.Destroy' : 'offres.destroy', $offre->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $offres->links() }}
        </footer>
    </div>





@endsection