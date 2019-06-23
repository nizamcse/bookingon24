<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/6/2018 AD
 * Time: 7:34 PM
 */

namespace App\Traits;


use Keygen\Keygen;

trait Referralable
{
    public static function bootReferralable()
    {
        static::creating(function ($model) {
            $referral_id = Keygen::numeric(10)->generate();
            $model->referral_id = $referral_id;

        });
    }
}