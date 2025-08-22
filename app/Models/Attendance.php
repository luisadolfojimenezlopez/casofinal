<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;


    protected $fillable = [
        
        'id_employee',
        'entry_time',
        'departure_time',
        'attendance_yes_no',
        'incident_type',
        'observation',
        'post',
        'hourtotal',
        'justified_document',
        'date_complete'
    ];


public function report()
    {
        return $this->hasMany(Report::class);
    }

public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
