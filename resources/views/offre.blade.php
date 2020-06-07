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

                        <form name="offre"  method="post" >
                           @csrf
                            <div class="form-group row">
                                <label for="titre_emploi" class="col-md-4 col-form-label text-md-right">{{ __('titre demploi') }}</label>

                                <div class="col-md-6">
                                    <input id="titre_emploi" type="text" class="form-control " name="titre_emploi" value="{{ old('titre_emploi') }}" required autocomplete="titre_emploi" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="secteur_emploi" class="col-md-4 col-form-label text-md-right">{{ __('Secteur d emploi') }}</label>

                                <div class="col-md-6">
                                    <input id="secteur_emploi" type="text" class="form-control " name="secteur_emploi" value="{{ old('secteur_emploi') }}" required autocomplete="secteur_emploi" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control " name="description" value="{{ old('description') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type_emploi" class="col-md-4 col-form-label text-md-right">{{ __('type d emploi') }}</label>

                                <div class="col-md-6">
                                    <input id="type_emploi" type="text" class="form-control " name="type_emploi" value="{{ old('type_emploi') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="date_expiration" class="col-md-4 col-form-label text-md-right" >Date d'expiration </label>
                                <div class="col-md-6" id="datetimepicker-01" data-target-input="nearest">
                                    <input type="text" class="form-control" placeholder="Date" data-target="#datetimepicker-01">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Salaire demandé </label>
                                <div class="col-md-6">
                                <input id="salaire_min" type="text" class="form-control">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="mail_recruteur" class="col-md-4 col-form-label text-md-right">{{ __('Mail de recruteur concerné') }}</label>

                                <div class="col-md-6">
                                    <input id="mail_recruteur" type="email" class="form-control " name="mail_recruteur" value="{{ old('mail_recruteur') }}" required autocomplete="secteur_emploi" autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Publier') }}
                                        <h1>hello</h1>
                                    </button>
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
