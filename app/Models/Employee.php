<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function getFullname() {
        return $this->first_name ." ". $this->last_name;
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
