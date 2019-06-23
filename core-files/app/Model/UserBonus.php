<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserBonus extends Model
{
    protected $fillable = ['user_id','bonus_amount','referral_type_key'];
}
