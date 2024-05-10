<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Hat;


class HatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Hat::all());
        $hats = Hat::orderByDesc('id')->get();
        return view('guests.hats.index', compact('hats'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hat $hat)
    {
        //dd($hat);
        return view('guests.hats.show', compact('hat'));
    }
}
