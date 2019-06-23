<?php

namespace App\Model\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class OperationalInterval extends Model
{
    protected $fillable = ['name','start_date','end_date','sat','sun','mon','tue','wed','thu','fri'];
}
