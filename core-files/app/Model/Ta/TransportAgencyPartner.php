<?php

namespace App\Model\Ta;

use App\Traits\CreatedBy;
use App\Traits\TransportAgencyPartnerTrait;
use Illuminate\Database\Eloquent\Model;

class TransportAgencyPartner extends Model
{
    use CreatedBy;
    use TransportAgencyPartnerTrait;
    protected $fillable = [
        'name',
        'ta_id',
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
    ];
}
