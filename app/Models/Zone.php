<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    /** @use HasFactory<\Database\Factories\ZoneFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [];

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}
