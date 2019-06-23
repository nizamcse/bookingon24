<?php

namespace App\Model\VehicleReservation;

use App\Traits\TransportAgencyPartnerTrait;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use TransportAgencyPartnerTrait;
    protected $fillable = ['name','ta_id','departure_station','arrival_station','description'];

    public function transportAgency(){
        return $this->belongsTo('App\Model\Ta\TransportAgency','ta_id','id');
    }

    public function departureStation(){
        return $this->belongsTo('App\Model\Location','departure_station','id');
    }

    public function arrivalStation(){
        return $this->belongsTo('App\Model\Location','arrival_station','id');
    }
}
