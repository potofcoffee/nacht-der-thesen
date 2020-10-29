@extends('layouts.app')

@section('content')
    <div class="container text-center mt-3">
        <img class="img-fluid" src="{{ asset('img/rose.png') }}"/>
        <h1 class="mt-3" style="font-family: MedievalSharp;">Nacht der Thesen</h1>
        <p>Ein Spiel der <a href="https://www.tailfingen-evangelisch.de/" target="_blank">Evangelischen Kirchengemeinde
                Tailfingen</a>
            zum Reformationstag 2020: Überall in Tailfingen verteilt hängen Plakate mit den insgesamt 95 Thesen, die
            Martin Luther 1517 veröffentlicht hat.
            Wer ein Plakat sieht, scannt den Code und sammelt so Punkte. Mal sehen, wer die meisten Thesen findet.</p>
        <h2>Rangliste</h2>
        @if (count($users))
            <table class="table">
                <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Punkte</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td title="Gefunden: @foreach($user->theses as $thesis){{ $thesis->number }} @endforeach">{{ $user->theses->count() }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            Es gibt noch keine Mitspieler.
        @endif
        <h2 class="mt-2">Mitspielen</h2>
        <p>Du willst auch mitspielen? Kein Problem: Suche einfach ein Thesenplakat in Tailfingen und scanne den QR-Code.
        Beim ersten Plakat, das du scannst, wirst du nach deinem Namen gefragt und kannst eine PIN angeben. Bei allen weiteren
        Plakaten werden dir dann direkt die Punkte gutgeschrieben.</p>
        <p>Sollte dein Gerät sich zwischendurch abmelden, gibst du einfach deinen Namen und dein am Anfang gewählte
        PIN wieder neu ein.</p>
        <h2 class="mt-2">Weitere Informationen</h2>
        <a href="https://www.ekd.de/95-Thesen-10864.htm" target="_blank">
            <div style="width:100%; padding: 5px; font-size: 1.5em; text-align: center; border: 1px solid gray; margin: 2px; background-color: #eacb78;">
                95 Thesen
            </div>
        </a>
        <a href="https://www.ekd.de/Martin-Luther-10870.htm" target="_blank">
            <div style="width:100%; padding: 5px; font-size: 1.5em; text-align: center; border: 1px solid gray; margin: 2px; background-color: #eacb78;">
                Martin Luther
            </div>
        </a>
        <a href="https://www.tailfingen-evangelisch.de" target="_blank">
            <div style="width:100%; padding: 5px; font-size: 1.5em; text-align: center; border: 1px solid gray; margin: 2px; background-color: #eacb78;">
                Kirchengemeinde
            </div>
        </a>
        <hr/>
        <small>Copyright &copy; 2020 <a href="https://www.tailfingen-evangelisch.de" target="_blank">Evangelische
                Kirchengemeinde Tailfingen</a>. Verantwortlich: Pfr. Christoph Fischer &middot; Pfarramt Erlöserkirche
                &middot; Liegnitzer Str. 38 &middot; 72461 Albstadt &middot; Tel. 07432 3762 &middot;
                E-Mail <a href="mailto:christoph.fischer@elkw.de">christoph.fischer@elkw.de</a>
        </small>
    </div>
@endsection
