<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class PublicController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();

        return view('Houses.index', compact('houses'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        return view('Houses.show', compact('house'));
    }
}
