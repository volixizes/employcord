<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    
    protected $table = 'documents';

    protected $fillable = [
        'employee_id',
        'image_name',
        'image_path',
        'expiration',
        'status'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
