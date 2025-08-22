<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;
protected $perpage = 10;

    protected $fillable = [
        'id_schedule',
        'evening',
        'continuous_shift',
        'full_time',
         'half_time',
         'morning'

    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function report()
    {
        return $this->HasMany(Report::class);
    }
    
public function attendance()
    {
        return $this->HasMany(Attendance::class);
    }



    
}
