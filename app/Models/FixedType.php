<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedType extends Model
{
    use HasFactory;

    public const FIXED = 1;
    public const NOT_FIXABLE = 2;
    public const NEED_PARTS = 3;

    protected $fillable = [
        'name',
        'deleted_at',
    ];
}
