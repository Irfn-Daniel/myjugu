<?php

namespace App\Models;

use App\Models\Ward;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
