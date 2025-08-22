<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /** @use HasFactory<\Database\Factories\ReportFactory> */
protected $perPage = 10;

    protected $fillable = [

        'id_report',
        'day_generated',
       
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
    
 public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

public function area()
    {
        return $this->hasMany(Area::class);
    }

    public function justification()
    {
        return $this->belongsTo(Justification::class);
    }

    public function attendance()
    {
        return $this->HasMany(Attendance::class);
    }









}
