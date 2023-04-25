<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeFormImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'intake_form_id',
        'name',
        'deleted_at',
    ];
}
