@extends('layout.layout')

@section('content')

<div class="max-w-md mx-auto bg-white p-8 my-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6">Create Trip</h2>

    <form action="{{ url('/store-trip') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="from_location" class="block text-sm font-medium text-gray-600">From Location:</label>
            <select name="from_location" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value="Dhaka">Dhaka</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="to_location" class="block text-sm font-medium text-gray-600">To Location:</label>
            <select name="to_location" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value="Coxs">Cox's Bazaar</option>

            </select>
        </div>
        <div class="mb-4">
            <label for="departure_time" class="block text-sm font-medium text-gray-600">Departure Time:</label>
            <input type="datetime-local" name="departure_time" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="arrival_time" class="block text-sm font-medium text-gray-600">Arrival Time:</label>
            <input type="datetime-local" name="arrival_time" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Trip</button>
    </form>
</div>



@endSection