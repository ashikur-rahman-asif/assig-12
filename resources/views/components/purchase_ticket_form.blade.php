@extends('layout.layout')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Purchase Ticket</h2>

    <form action="{{ url('/store-ticket') }}" method="post" class="max-w-md mx-auto">
        @csrf
        <label class="block mb-2 text-sm font-medium text-gray-600" for="user_name">Your Name:</label>
        <input type="text" name="user_name" required class="w-full p-2 border border-gray-300 rounded mb-4">

        <label class="block mb-2 text-sm font-medium text-gray-600" for="user_email">Your Email:</label>
        <input type="email" name="user_email" required class="w-full p-2 border border-gray-300 rounded mb-4">

        <label class="block mb-2 text-sm font-medium text-gray-600" for="selected_seat">Select Seat:</label>
        <select name="selected_seat" required class="w-full p-2 border border-gray-300 rounded mb-4">
            @for ($seatNumber = 1; $seatNumber <= 36; $seatNumber++)
                <option value="{{ $seatNumber }}">{{ $seatNumber }}</option>
            @endfor
        </select>
        <label class="block mb-2 text-sm font-medium text-gray-600" for="selected_location">Select Location:</label>
        <select name="selected_location" required class="w-full p-2 border border-gray-300 rounded mb-4">
            <option value="Dhaka">Dhaka</option>
            <option value="Coxs">Cox's Bazaar</option>
        </select>
        
       
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Purchase Ticket</button>
    </form>
</div>

@endsection
