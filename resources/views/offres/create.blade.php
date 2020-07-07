@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">publiez un offre</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form name="offre"  action="{{ route('offres.store') }}" method="POST" >
                            @csrf

                            <div class="form-group row">
                                <label for="titre_emploi" class="col-md-4 col-form-label text-md-right">{{ __('titre demploi') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('titre_emploi') is-danger @enderror" id="titre_emploi" type="text" class="form-control " name="titre_emploi" value="{{ old('titre_emploi') }}" required autocomplete="titre_emploi" autofocus>

                                </div>
                                @error('titre_emploi')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="secteur_emploi" class="col-md-4 col-form-label text-md-right">{{ __('Secteur d emploi') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('secteur_emploi') is-danger @enderror" id="secteur_emploi" type="text" class="form-control " name="secteur_emploi" value="{{ old('secteur_emploi') }}" required autocomplete="secteur_emploi" autofocus>
                                </div>
                                @error('secteur_emploi')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="type_emploi" class="col-md-4 col-form-label text-md-right">{{ __('type d emploi') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('type_emploi') is-danger @enderror" id="type_emploi" type="text" class="form-control " name="type_emploi" value="{{ old('type_emploi') }}" autofocus>
                                </div>
                                @error('type_emploi')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('description') is-danger @enderror" id="description" type="text" class="form-control " name="description" value="{{ old('description') }}" autofocus>
                                </div>
                                @error('description')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="date_publication" class="col-md-4 col-form-label text-md-right">{{ __('Date publication') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('date_publication') is-danger @enderror" id="date_publication" type="date" class="form-control " name="date_publication" value="{{ old('date_publication') }}" autofocus>
                                </div>
                                @error('date_publication')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="date_limite" class="col-md-4 col-form-label text-md-right">{{ __('Date limite') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('date_limite') is-danger @enderror" id="date_limite" type="date" class="form-control " name="date_limite" value="{{ old('date_limite') }}" autofocus>
                                </div>
                                @error('date_limite')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="mail_recruteur" class="col-md-4 col-form-label text-md-right">{{ __('Mail de recruteur concerné') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('mail_recruteur') is-danger @enderror"  id="mail_recruteur" type="email" class="form-control " name="mail_recruteur" value="{{ old('mail_recruteur') }}" required autocomplete="mail_recruteur" autofocus>
                                </div>
                                @error('mail_recruteur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="salaire" class="col-md-4 col-form-label text-md-right">{{ __('Salaire') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('salaire_propose') is-danger @enderror" id="salaire_propose"  class="form-control " name="salaire_propose" value="{{ old('salaire_propose') }}" autofocus>
                                </div>
                                @error('salaire')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('ville') }}</label>

                                <div class="col-md-6">
                                    <input class="input @error('ville') is-danger @enderror" id="ville" type="text" class="form-control " name="ville" value="{{ old('ville') }} " autofocus>
                                </div>
                                @error('ville')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button  class="btn btn-primary">Créer</button>


                                </div>
                            </div>



                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
