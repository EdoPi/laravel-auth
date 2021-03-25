<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\House;
use App\Http\Controllers\Controller;


class HouseController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([

            'address_prefix' => 'required|max:20',
            'address' => 'required|max:30',
            'number' => 'required|numeric',
            'city' => 'required|max:20',
            'rooms' => 'required|numeric|between:0,10',
            'bath' => 'required|numeric|between:0,10',
            'furniture' => 'max:1000',
            'price' => 'required|numeric|between:0,10000',
            'image' => 'required|url',

            ]);

        $data = $request -> all();


        $house= new House();
        $house->fill($data);
        $house->save();


        $newHouse = House::orderBy('id', 'desc')->first();
        return redirect()->route('houses.show', $newHouse);

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        return view('Houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        $request->validate([

            'address_prefix' => 'required|max:20',
            'address' => 'required|max:30',
            'number' => 'required|numeric',
            'city' => 'required|max:20',
            'rooms' => 'required|numeric|between:0,10',
            'bath' => 'required|numeric|between:0,10',
            'furniture' => 'max:1000',
            'price' => 'required|numeric|between:0,10000',
            'image' => 'required|url',

            ]);

        $data = $request -> all();
        $house -> update($data);

        return redirect()->route('houses.show', compact('house'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
