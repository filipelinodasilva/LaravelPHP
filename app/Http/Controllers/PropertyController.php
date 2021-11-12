<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");

        var_dump($properties);

       return view('property/index');
    }

    public function create()
    {
        return view('property/create');
    }
}
