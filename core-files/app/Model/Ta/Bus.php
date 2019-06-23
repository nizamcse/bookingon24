<?php

namespace App\Model\Ta;

use App\Traits\TransportAgencyPartnerTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use TransportAgencyPartnerTrait;
    protected $fillable = ['model','bus_type_id','air_condition','ta_id','partner_id','added_on','sku','journey_start_from','seat_layout_id'];

    protected $casts = [
        'air_condition' => 'boolean'
    ];

    public function partner(){
        return $this->belongsTo('App\Model\Ta\TransportAgencyPartner','partner_id','id');
    }

    public function agency(){
        return $this->belongsTo('App\Model\Ta\TransportAgency','ta_id','id');
    }

    public function owner(){
        return $this->partner ? $this->partner->name : $this->agency->name;
    }

    public function busType(){
        return $this->belongsTo('App\Model\VehicleType','bus_type_id','id');
    }

    public function seatLayout(){
        return $this->belongsTo('App\Model\Ta\VehicleReservation\SeatLayout','seat_layout_id','id');
    }

    public function setAddedOnAttribute($value)
    {
        $this->attributes['added_on'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function setJourneyStartFromAttribute($value)
    {
        $this->attributes['journey_start_from'] = Carbon::parse($value)->format('Y-m-d');
    }
}
