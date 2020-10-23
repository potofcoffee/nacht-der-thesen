@extends('layouts.app')

@section('title', 'Anmelden')

@section('content')
    <h1>Willkommen zurück, {{ $name }}</h1>
    <form method="post" action="{{ route('auth.authenticate') }}">
        @csrf
        <input type="hidden" name="user" value="{{ $name }}" />
        <div class="form-group">
            <label for="user">Gib deine PIN ein:</label>
            <input class="form-control" type="number" name="pin" placeholder="Gib hier deine vierstellige PIN ein" minlength="4" maxlength="4" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Anmelden" />
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('input[name="pin"]').focus();
        });
    </script>
@endsection
