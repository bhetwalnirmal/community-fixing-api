<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand',
        'accessories',
        'description',
        'problem',
        'last_working_description',
        'weight',
    ];

    function itemType () {
        return $this->belongsTo(ItemType::class, 'item_type_id', 'id');
    }
}
