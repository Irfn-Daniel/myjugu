<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LLG;
use App\Models\Clan;
use App\Models\Ward;
use App\Models\Subclan;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;

class Member extends Model implements Authenticatable
{
    public $timestamps = false;
    use AuthenticatableTrait;
    
    use HasFactory;

    protected $table = 'members';
    protected $primarykey = 'id';
    protected $fillable = [
        'trans',
        'reg_date',
        'name',
        'name_title',
        'name_first',
        'name_middle',
        'name_last',
        'nid_number',
        'photo_id',
        'photo_url',
        'email',
        'password',
        'mobile_num',
        'gender',
        'religion',
        'birth_date',
        'age',
        'death_date',
        'education',
        'job_title',
        'employer',
        'postal_address',
        'residential_address',
        'father_name',
        'father_title',
        'father_name_first',
        'father_name_middle',
        'father_name_last',
        'mother_name',
        'mother_title',
        'mother_name_first',
        'mother_name_middle',
        'mother_name_last',
        'bank_name',
        'account_name',
        'account_num',
        'relationship',
        'user_roles',
        'user_status',
        'jugu_terms',
        'clan',
        'subclan',
        'sub_subclan',
        'province',
        'district',
        'llg',
        'bank_name',
        'account_name',
        'account_number',
        'relationship'       
    ];

}
