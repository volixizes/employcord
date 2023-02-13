<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    
    protected $table = 'documents';

    protected $fillable = [
        'employee_id',
        'image_path',
        'image_type',
        'expiration',
        'image_name'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function  getStatus() {
        $status = "Current";
        switch ($status) {
            case $this->expiration > now():
                return $status = "Current";
                break;
            case $this->expiration == now()->format('Y-m-d'):
                return $status = "Valid until today";
                break;
            case $this->expiration < now()->format('Y-m-d'):
                return $status = "Expired";
                break;
            // case $this->expiration->subMonth() >= now()->format('Y-m-d');
            //     $days_to_expire = Carbon::now()->diffInDays(Carbon::parse($this->expiration));
            //     return $status = $days_to_expire ." ". "to be expired!";
            //     break;
        }
    }
}
