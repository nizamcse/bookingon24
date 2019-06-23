<?php

namespace App\Model\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['line_id','bus_id','operational_interval_id','departure_time','arrival_time','ticket_price'];

    public function line(){
        return $this->belongsTo('App\Model\VehicleReservation\Line','line_id','id');
    }

    public function bus(){
        return $this->belongsTo('App\Model\Ta\Bus','bus_id','id');
    }
}
