<?php

namespace App\Model\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class TripSchedule extends Model
{
    protected $fillable = ['trip_id','station_id','arrival_time','departure_time','description'];
}
