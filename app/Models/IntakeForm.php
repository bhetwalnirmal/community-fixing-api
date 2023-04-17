<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'drop_in_staff_id',
        'client_id',
        'taken_staff_id',
        'fixer_id',
        'fixed_type_id',
        'item_code',
        'intake_date',
        'fixed_date',
    ];

    protected $table = 'intake_forms';

    public function item () {
        return $this->hasOne(Item::class, 'id', 'item_id');
    }

    public function dropInStaff () {
        return $this->hasOne(User::class, 'id', 'drop_in_staff_id');
    }

    public function client () {
        return $this->hasOne(User::class, 'id', 'client_id');
    }

    public function takenStaff () {
        return $this->hasOne(User::class, 'id', 'taken_staff_id');
    }
}
