<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentRequest extends Model
{
    use HasFactory;

    const USER_ID = 'user_id';
    const EQUIPMENT_ID = 'equipment_id';
    const QUANTITY = 'quantity';
    
    protected $fillable = [
        self::USER_ID,
        self::EQUIPMENT_ID,
        self::QUANTITY
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
