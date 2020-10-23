<?php

namespace App\Http\Controllers;

use App\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThesisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Thesis $thesis, $code)
    {
        if ($code != $thesis->code) abort(404);
        if (!Auth::user()->theses->contains($thesis)) {
            Auth::user()->theses()->attach($thesis);
        }
        return view('theses.show', compact('thesis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Thesis $thesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thesis $thesis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thesis $thesis)
    {
        //
    }
}
