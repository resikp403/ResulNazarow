<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookings extends Controller
{
    //
    public function index()
    {
        return Bookings::with(['user', 'station'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'station_id' => 'required|exists:stations,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|string',
        ]);

        return Bookings::create($data);

    }
}
