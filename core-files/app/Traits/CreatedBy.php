<?php
/**
 * Created by PhpStorm.
 * User: fahadseraj
 * Date: 10/1/2018 AD
 * Time: 2:01 PM
 */

namespace App\Traits;


use Illuminate\Support\Facades\Auth;

trait CreatedBy
{
    public static function bootCreatedBy()
    {
        static::saving(function ($model) {
            $model->created_by = Auth::user()->id;
        });
    }

}