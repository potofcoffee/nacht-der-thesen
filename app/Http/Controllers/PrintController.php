<?php

namespace App\Http\Controllers;

use App\Thesis;
use Illuminate\Support\Facades\App;
use Meneses\LaravelMpdf\Facades\LaravelMpdf;
use Meneses\LaravelMpdf\LaravelMpdfServiceProvider;

class PrintController extends Controller
{
    public function print()
    {
        $theses = Thesis::all();

        return response()
            ->streamDownload(function () use ($theses) {
            LaravelMpdf::loadView('print', compact('theses'), [], [
                'title' => '95 Thesen (Nacht der Thesen)'
            ])->stream('95_Thesen.pdf');
        }, '95_Thesen.pdf');

    }
}
