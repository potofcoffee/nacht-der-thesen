@extends('layouts.app')

@section('title', 'Anmelden')

@section('content')
    <h1>Anmelden</h1>
    <form method="post" action="{{ route('auth.submit') }}">
        @csrf
        <div class="form-group">
            <label for="user">Dein Name:</label>
            <input class="form-control" type="text" name="user" placeholder="Gib hier deinen Namen ein" />
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Anmelden" />
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('input[name="user"]').focus();
        });
    </script>
@endsection
