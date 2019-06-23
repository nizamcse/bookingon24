<?php

namespace App\Model\Inventory;

use App\Traits\CreatedBy;
use App\Traits\TransportAgencyPartnerTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use CreatedBy;
    use TransportAgencyPartnerTrait;
    use SoftDeletes;
    protected $fillable = ['name','created_by','unit_id'];
    public function user(){
        return $this->belongsTo('App\Model\Ta\Auth\TaUser','created_by','id');
    }
    public function createdBy(){
        return $this->user ? $this->user->name : '';
    }

}
