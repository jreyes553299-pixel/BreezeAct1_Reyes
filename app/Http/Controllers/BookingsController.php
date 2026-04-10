<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Bookings::latest()->get();
        return view('Bookings', compact('bookings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => ['required', 'string', 'max:255'],
            'guest_email' => ['required', 'email', 'max:255'],
            'room_type' => ['required', 'string', 'max:255'],
            'check_in_date' => ['required', 'date'],
            'check_out_date' => ['required', 'date', 'after_or_equal:check_in_date'],
        ]);

        Bookings::create($validated);

        return redirect()->route('Bookings')->with('status', 'Booking saved successfully.');
    }
}
