@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="{{ route('quizz.store') }}" method="post" name="quizz">
                        @csrf
                        <div class="user-dashboard-info-box">


                            <div class="section-title-02 mb-4">
                                <h4>Quizz Information</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nom du quizz </label>
                                    <input class="input @error('nom') is-danger @enderror" type="text" id="nom" name="nom" class="form-control">
                                    @error('nom')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-12 mb-0">
                                <label>Description</label>
                                <textarea class="textarea" id="description" name="description" class="form-control" rows="5" placeholder="description "></textarea>
                                @error('description')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary" >Commencer!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endsection