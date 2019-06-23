<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/6/2018 AD
 * Time: 7:35 PM
 */

namespace App\Traits;


use App\Model\UserBonus;
use App\Model\UserBonusSettings;

trait Bonusable
{
    public static function bootBonusable()
    {
        static::created(function ($model) {
            $user_bonus_setting = UserBonusSettings::first();
            if($user_bonus_setting && $user_bonus_setting->is_active_registration_bonus){
                $total_wallet_amount = $model->total_wallet_amount + $user_bonus_setting->register_bonus_amount;
                $model->fill([
                    'total_wallet_amount' => $total_wallet_amount
                ])->save();

                UserBonus::create([
                    'user_id'   => $model->id,
                    'bonus_amount'  => $user_bonus_setting->register_bonus_amount,
                    'referral_type_key' => 'on-registration-bonus',
                ]);
            }

        });
    }
}