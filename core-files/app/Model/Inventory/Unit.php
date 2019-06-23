<?php

namespace App\Model\Inventory;

use App\Traits\CreatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;
    use CreatedBy;
    protected $fillable = ['name','create_by'];

    public function user(){
        return $this->belongsTo('App\Model\Ta\Auth\TaUser','created_by','id');
    }
    public function createdBy(){
        return $this->user ? $this->user->name : '';
    }
}
