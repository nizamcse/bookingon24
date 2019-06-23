<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/13/2018 AD
 * Time: 4:07 PM
 */

namespace App\Traits;


use Illuminate\Support\Facades\Auth;

trait TransportAgencyPartnerTrait
{
    public static function bootTransportAgencyPartnerTrait()
    {
        static::saving(function ($model) {
            $model->ta_id = Auth::user()->transport_agency_id;
        });
    }

}