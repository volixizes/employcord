<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthday',
        'gender',
        'marital_status',
        'contact_no',
        'street',
        'barangay',
        'city',
        'province',
        'date_hire',
        'employment_status',
        'isActive',
        'Job_Title',
        'isResigned',
        'rank',
        'department',
        'email',
        'password',
    ];
}
