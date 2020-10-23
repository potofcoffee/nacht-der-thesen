<!DOCTYPE html>
<html>
<head></head>
<body>
@foreach($theses as $thesis)
    <div style="text-align:center; width: 100%; @if($thesis->number < 95)page-break-after: always; @endif font-size: 2em;">
        <img src="{{ asset('img/rose.png') }}" style="max-height: 8cm;"/>
        <h1>These {{ $thesis->number }}</h1>
        <span @if($thesis->number == 84) style="font-size: 0.7em" @endif>{{ $thesis->text }}</span><br /><br />
        <small>Martin Luther</small>
        <hr/>
        <div style="font-family: helveticacondensed; font-size: 0.5em;">
            <table width="100%" cellpadding="3">
                <tbody>
                <tr>
                    <td valign="top" style="font-family: helveticacondensed">
                        <p style="font-family: medievalsharp; font-weight: bold;">Nacht der Thesen</p>
                        <b>Code scannen und Punkte sammeln</b><br />
                        Ein Spiel der Evangelischen Kirchengemeinde zum Reformationstag 2020<br /><br />
                        <span style="text-decoration: underline">Informationen</span><br />
                        Pfr. Christoph Fischer &middot; Pfarramt Erlöserkirche<br />
                        Liegnitzer Str. 38 &middot; 72461 Albstadt &middot; Tel. 07432 3762<br /><br />
                        www.nacht-der-thesen.de
                    </td>
                    <td valign="top" width="30%" style="text-align: right;">
                        <barcode code="{{ route('thesis', ['thesis' => $thesis->id, 'code' => $thesis->code]) }}"
                                 type="QR" error="H" size="2.0" class="barcode"/>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endforeach
</body>
</html>
