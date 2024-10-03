<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const NAME = 'name';

    // try
    const MOUSE = 1;
    const KEYBOARD = 2;
    const MONITOR = 3;

    protected $fillable = [self::NAME];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
}
