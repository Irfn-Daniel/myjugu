<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_subclan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subclan_id',
        'name',
    ];

    public function subclan()
    {
        return $this->belongsTo(Subclan::class);
    }
}
