<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/6/2018 AD
 * Time: 8:04 PM
 */

namespace App\Traits;


use App\Model\UserBonus;
use App\Model\UserBonusSettings;
use App\User;

trait ReferredBonusable
{
    public function createReferrerBonus($referral_id){
        $user = User::where('referral_id',$referral_id)->first();
        $user_bonus_setting = UserBonusSettings::first();
        if($user_bonus_setting->is_active_referral_bonus && $user){
            $user->update([
                'total_wallet_amount' => $user->total_wallet_amount + $user_bonus_setting->referral_bonus_amount
            ]);

            UserBonus::create([
                'user_id'   => $user->id,
                'bonus_amount'  => $user_bonus_setting->referral_bonus_amount,
                'referral_type_key' => 'referral-registration-bonus',
            ]);
        }
    }

}