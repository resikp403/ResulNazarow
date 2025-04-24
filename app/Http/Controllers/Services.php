<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Services extends Controller
{
    //
    public function index()
    {
        return Service::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        return Service::create($data);
    }
}
