<?php

namespace App\Model\Inventory;

use App\Traits\CreatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use CreatedBy;
    use SoftDeletes;
    protected $fillable = ['name','created_by'];
    public function user(){
        return $this->belongsTo('App\Model\Ta\Auth\TaUser','created_by','id');
    }
    public function createdBy(){
        return $this->user ? $this->user->name : '';
    }
}
