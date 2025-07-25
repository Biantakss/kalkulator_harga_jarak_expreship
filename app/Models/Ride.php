<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ride extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone_number', 'gender', 'pickup_location', 'dropoff_location', 'distance', 'pickup_time','price'];
    protected $table = 'rides';

}
