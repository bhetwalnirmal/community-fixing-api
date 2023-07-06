<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $table = 'borrows';
    
    protected $fillable = [
        'client_id',
        'name',
        'phone_number',
        'type_of_tooll',
        'model_number',
        'accessories',
        'comment',
        'date_borrowed',
        'borrow_staff_name',
        'expected_return_date',
        'date_returned',
        'return_staff_name',
    ];
}
