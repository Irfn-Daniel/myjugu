<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLG extends Model
{
    use HasFactory;

    protected $table = 'llgs';

    protected $fillable = [
        'id',
        'district_id',
        'name',
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
