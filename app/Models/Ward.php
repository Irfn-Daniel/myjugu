<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'llg_id',
        'name',
    ];

    public function llg()
    {
        return $this->belongsTo(LLG::class);
    }
}
