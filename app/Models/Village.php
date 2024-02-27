<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ward_id',
        'name',
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
