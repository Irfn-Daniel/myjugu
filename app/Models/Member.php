<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'trans',
        'name',
        'nid_number',
        'id_photo',
        'email',
        'password',
        'mobile_number',
        'gender',
        'religion',
        'date_of_birth',
        'age',
        'date_of_death',
        'education',
        'job_title',
        'employer',
        'postal_address',
        'residential_address',
        'province_id',
        'district_id',
        'llg_id',
        'ward_id',
        'village_id',
        'clan_id',
        'subclan_id',
        'sub_subclan_id',
        'bank_name',
        'account_name',
        'account_number',
        'relationship',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function llg()
    {
        return $this->belongsTo(LLG::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function clan()
    {
        return $this->belongsTo(Clan::class);
    }

    public function subclan()
    {
        return $this->belongsTo(Subclan::class);
    }

    public function sub_subclan()
    {
        return $this->belongsTo(Sub_subclan::class);
    }

}
