<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subclan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'clan_id',
        'name',
    ];

    public function clan()
    {
        return $this->belongsTo(Clan::class);
    }
}
