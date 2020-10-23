@extends('layouts.app')

@section('content')
    <div class="container text-center mt-3">
        <img class="img-fluid" src="{{ asset('img/rose.png') }}" />
        <h1 class="mt-3" style="font-family: MedievalSharp;">These {{ $thesis->number }}</h1>
        <p style="font-family: MedievalSharp;">{{ $thesis->text }}</p>
        @auth()
            <hr />
            <b>{{ Auth::user()->name }}</b><br />
            {{ Auth::user()->theses->count() }} Punkte<br />
            <small><a href="{{ route('home') }}">Informationen und aktuelle Rangliste</a></small>
        @endauth
    </div>
@endsection

