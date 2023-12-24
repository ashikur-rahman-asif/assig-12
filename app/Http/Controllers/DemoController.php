<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function createTripForm()
    {
        return view('layout.home');
    }

    public function storeTrip(Request $request)
    {
        $trip = Trip::create([
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
        ]);
        return redirect()->route('purchase_ticket_form', ['trip_id' => $trip->id])->with('success', 'Trip created successfully!');

    }
    

    public function purchaseTicketForm(Request $request)
    {

        $tripId = $request->input('trip_id'); 
        $availableSeats = range(1, 36);
        $locations = Location::get();
    
        return view('components.purchase_ticket_form', compact('availableSeats', 'locations', 'tripId'));
    }
    

    public function storeTicket(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email',
            'selected_seat' => 'required|numeric',
            'selected_location' => 'required',
            'trip_id' => 'required',
        ]);
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
        ]);

        SeatAllocation::create([
            'user_id' => $user->id,
            'trip_id' => $request->trip_id,
            'seat_number' => $request->selected_seat,
        ]);
        return redirect()->route('success')->with('success', 'Ticket purchased successfully!');
    }

    function success(){
        return view('components.successfully_ticket_purchased');
    }

}
