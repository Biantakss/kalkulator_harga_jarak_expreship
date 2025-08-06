<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ride;


class RideController extends Controller
{
    public function index()
    {
        return view('ride.form');
    }

public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
            'distance' => 'required|numeric|min:0',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required',
        ]);

        $price = $this->calculatePrice($request->distance);

        $pickupDateTime = $request->pickup_date . ' ' . $request->pickup_time;
        $ride = Ride::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
            'distance' => $request->distance,
            'pickup_time' => $pickupDateTime,
            'price' => $price,
        ]);

        return view('ride.result', compact('ride'));
    }

    private function calculatePrice($distance)
    {
        $basePrice = 10000;
        $baseDistance = 5;
        $ratePerKm = 1500;

        if ($distance <= $baseDistance) {
            return $basePrice;
        }

        $extraKm = ceil($distance - $baseDistance);
        return $basePrice + ($extraKm * $ratePerKm);
    }

}
