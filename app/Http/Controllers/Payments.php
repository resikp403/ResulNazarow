<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





class Payments extends Controller
{
    public function index()
    {
        return Payments::with(['user', 'booking'])->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'booking_id' => 'required|exists:bookings,id',
            'amount' => 'required|numeric|min:0',
            'methods' => 'required|string',
        ]);

        return Payments::create($data);
    }
}
