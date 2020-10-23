@extends('layouts.app')

@section('title', 'Anmelden')

@section('content')
    <h1>Hallo, {{ $name }}</h1>
    <form method="post" action="{{ route('auth.store') }}">
        @csrf
        <input type="hidden" name="user" value="{{ $name }}" />
        <div class="form-group">
            <label for="user">Wähle deine PIN:</label>
            <input class="form-control" type="number" name="pin" placeholder="Gib hier deine vierstellige PIN ein" minlength="4" maxlength="4" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Anmelden" />
        </div>
    </form>
@endsection
