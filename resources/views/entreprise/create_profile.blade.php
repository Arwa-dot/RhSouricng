@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('entreprise.store') }}" method="post" name="entreprise">
                        @csrf
                    <div class="user-dashboard-info-box">


                        <div class="section-title-02 mb-4">
                            <h4>Basic Information</h4>
                        </div>
                        <div class="cover-photo-contact">

                            <div class="upload-file">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label">Télécharger votre photo de couverture</label>
                                </div>
                            </div>
                        </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nom de L'entreprise </label>
                                    <input type="text" id="nom_entreprise" name="nom_entreprise" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="example:medianet@gmail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nom du Fondateur</label>
                                    <input type="text" id="nom_fondateur" name="nom_fondateur" class="form-control" >
                                </div>

                                <div class="form-group col-md-6 datetimepickers">
                                    <label>date de fondation</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input type="text" id="date_fondation" name="date_fondation" class="form-control datetimepicker-input" value="02/03/2012" data-target="#datetimepicker-01">
                                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Télephone</label>
                                    <input type="text" id="num_tel" name="num_tel" class="form-control" placeholder="exemple: +(123) 345-6789">
                                </div>
                                <div class="form-group col-md-6 select-border">
                                    <label>Domaine</label>
                                    <select id="domaine" name="domaine" class="form-control basic-select">
                                        <option value="value 01" selected="selected">Informatique</option>
                                        <option value="value 02">comptabilité</option>
                                        <option value="value 03">Medecine</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Site web</label>
                                    <input id="site_web" name="site_web" type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                <label> Nombre d'employee</label>
                                    <input id="nombre_employe" type="text" name="nombre_employe" class="form-control">
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label>Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="5" placeholder="Use a past defeat as a motivator. Remind yourself you have nowhere to go except up as you have already been at the bottom"></textarea>
                                </div>
                            </div></div>


                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-3">
                            <h4>Liens sociaux</h4>
                        </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" value="https://www.facebook.com/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" value="https://www.twitter.com/">
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" value="https://www.linkedin.com/">
                                </div>
                            </div>

                    </div>
                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-3">
                            <h4>Address</h4>
                        </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Enter Your  location</label>
                                    <input type="text" id="adresse_complete" name="adresse_complete" class="form-control" value="" placeholder="Enter Your  location">
                                </div>
                            </div>
                            <div class="location-map">
                                <iframe src="https://www.google.tn/maps/@36.8375192,10.1631903,14z?hl=fr" height="370" style="border:0" allowfullscreen></iframe>
                            </div>

                    </div>
                        <button type="submit" class="btn btn-md btn-primary" >Enregistrer</button>
                        </form>
                </div>
            </div></div>
        </div> </section>
    </section>
    @endsection