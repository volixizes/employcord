<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leaves';

    protected $fillable = [
        'datefrom',
        'dateto',
        'reason',
        'employees_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
