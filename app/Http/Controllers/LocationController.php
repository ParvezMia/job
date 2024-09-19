<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function denver()
    {
        return view('locations.denver');
    }

    public function northglenn()
    {
        return view('locations.northglenn');
    }

    public function henderson()
    {
        return view('locations.henderson');
    }

    public function broomfield()
    {
        return view('locations.broomfield');
    }

    public function wheatRidge()
    {
        return view('locations.wheat-ridge');
    }
    public function lochbuie()
    {
        return view('locations.lochbuie');
    }
    public function golden()
    {
        return view('locations.golden');
    }
    public function brighton()
    {
        return view('locations.brighton');
    }
    public function westMinster()
    {
        return view('locations.west-minster');
    }
    public function lakewood()
    {
        return view('locations.lakewood');
    }
    public function fortLupton()
    {
        return view('locations.fort-lupton');
    }
    public function boulder()
    {
        return view('locations.boulder');
    }
    public function thornton()
    {
        return view('locations.thornton');
    }
    public function lafayette()
    {
        return view('locations.lafayette');
    }
    public function englewood()
    {
        return view('locations.englewood');
    }
    public function aurora()
    {
        return view('locations.aurora');
    }
    public function louisville()
    {
        return view('locations.louisville');
    }
    public function littleton()
    {
        return view('locations.littleton');
    }
    public function castleRock()
    {
        return view('locations.castle-rock');
    }
    public function arvada()
    {
        return view('locations.arvada');
    }
    public function highlandsRanch()
    {
        return view('locations.highlands-ranch');
    }

}
