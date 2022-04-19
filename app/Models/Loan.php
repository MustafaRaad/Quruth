<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name', 'l_name', 'birthdate', 'place', 'phone', 'nat_id',
        'work_place',
        'monthly_income',
        'loan_type'
    ];
}
