<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stations extends Controller
{
    //
    public function index()
    {
        return Station::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'status' => 'required|string',
        ]);

        return Station::create($data);
    }
}
