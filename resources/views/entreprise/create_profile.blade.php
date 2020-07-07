@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="{{ route('entreprise.store') }}" method="post" name="entreprise">
                        @csrf
                        <div class="user-dashboard-info-box">


                            <div class="section-title-02 mb-4">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="cover-photo-contact">

                                <div class="upload-file">
                                    <div class="custom-file">
                                        <input class="input @error('image') is-danger @enderror" type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label">Télécharger votre photo de couverture</label>
                                    </div>

                                </div>
                                @error('image')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nom de L'entreprise </label>
                                    <input class="input @error('nom_entreprise') is-danger @enderror" type="text" id="nom_entreprise" name="nom_entreprise" class="form-control">
                                    @error('nom_entreprise')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input class="input @error('email') is-danger @enderror" type="email" id="email" name="email" class="form-control" placeholder="example:medianet@gmail.com">
                                    @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nom du Fondateur</label>
                                    <input class="input @error('nom_fondateur') is-danger @enderror" type="text" id="nom_fondateur" name="nom_fondateur" class="form-control" >
                                    @error('nom_fondateur')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 datetimepickers">
                                    <label>date de fondation</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input class="input @error('date_fondation') is-danger @enderror" type="date" id="date_fondation" name="date_fondation" class="form-control datetimepicker-input" value="02/03/2012" data-target="#datetimepicker-01">
                                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                        @error('date_fondation')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Télephone</label>
                                    <input class="input @error('num_tel') is-danger @enderror" type="number" id="num_tel" name="num_tel" class="form-control" placeholder="exemple: +(123) 345-6789">
                                    @error('num_tel')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 select-border">
                                    <label>Domaine</label>
                                    <select class="select @error('domaine') is-danger @enderror" id="domaine" name="domaine" class="form-control basic-select">
                                        <option value="value 01" selected="selected">Informatique</option>
                                        <option value="value 02">comptabilité</option>
                                        <option value="value 03">Medecine</option>
                                    </select>
                                    @error('domaine')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Site web</label>
                                    <input class="input @error('site_web') is-danger @enderror" id="site_web" name="site_web" type="text" class="form-control">
                                    @error('site_web')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> Nombre d'employee</label>
                                    <input class="input @error('nombre_employe') is-danger @enderror" id="nombre_employe" type="number" name="nombre_employe" class="form-control">
                                    @error('nombre_employe')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label>Description</label>
                                    <textarea class="textarea" id="description" name="description" class="form-control" rows="5" placeholder="description,i "></textarea>
                                    @error('description')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                            <div class="user-dashboard-info-box">
                                <div class="section-title-02 mb-3">
                                    <h4>Address</h4>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Enter Your  location</label>
                                        <input class="input @error('adresse_complete') is-danger @enderror "type="text" id="adresse_complete" name="adresse_complete" class="form-control" value="" placeholder="Enter Your  location">
                                    </div>
                                    @error('adresse_complete')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="location-map">
                                    <iframe src="https://www.google.tn/maps/@36.8375192,10.1631903,14z?hl=fr" height="370" style="border:0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-md btn-primary" >Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection