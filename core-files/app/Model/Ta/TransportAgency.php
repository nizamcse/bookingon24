<?php

namespace App\Model\Ta;

use App\Traits\CreatedBy;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class TransportAgency extends Model
{
    use Sluggable;
    use CreatedBy;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'contact_no',
        'contact_person',
        'contact_person_designation',
        'city',
        'state',
        'zip_code',
        'tin',
        'trade_license_no',
        'created_by',
        'slug',
        'is_active'
    ];

    public function account(){
        return $this->hasOne('App\Model\Ta\Auth\TaUser','transport_agency_id','id');
    }

    public function sluggable() {
        return [
            'source' => $this->name,
        ];
    }
}
