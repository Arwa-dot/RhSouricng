@extends('layouts.app')
@section('content')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
    @foreach($quizzs as $quizz)
     <div class="feature-info-content">
            <h5 class="mb-3 feature-info-title">{{ $quizz->nom }}</h5>
            <p class="mb-0"> {{$quizz->description}}</p>
            <a class="btn btn-outline-primary mt-4" href="#">afficher </a>
     </div>
                                
@endforeach
</div>
</div>
</div></section>
     

@endsection