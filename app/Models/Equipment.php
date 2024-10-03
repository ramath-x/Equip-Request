<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    public $table = 'equipment';
    
    const NAME = 'name';
    const CATEGORY_ID = 'category_id';
    const PRICE = 'price';


    protected $fillable = [
        self::NAME,
        self::CATEGORY_ID,
        self::PRICE
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function requests()
    {
        return $this->hasMany(EquipmentRequest::class);
    }
}
