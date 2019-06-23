<?php

namespace App\Model\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class TripNews extends Model
{
    protected $fillable = ['trip_id','news_time','description'];
}
