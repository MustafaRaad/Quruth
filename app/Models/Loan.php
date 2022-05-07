<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'f_name', 'l_name', 'birthdate', 'place', 'phone', 'nat_id',
        'work_place',
        'monthly_income',
        'loan_type',
        'credit_card',
        'credit_card_name',
        'credit_card_expire',
        'credit_card_monthly_income'
    ];
}
