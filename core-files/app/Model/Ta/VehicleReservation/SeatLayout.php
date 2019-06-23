<?php

namespace App\Model\Ta\VehicleReservation;

use App\Traits\TransportAgencyPartnerTrait;
use Illuminate\Database\Eloquent\Model;

class SeatLayout extends Model
{
    use TransportAgencyPartnerTrait;

    protected $fillable = ['name','ta_id','total_row','total_column','layout','number_of_seat'];

    protected $casts = [
        'layout'    => 'array'
    ];
}
