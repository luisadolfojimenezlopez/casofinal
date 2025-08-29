<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    /** @use HasFactory<\Database\Factories\AreaFactory> */
    use HasFactory;


    protected $fillable = [
        'id_area',
        'name',
        'human_resources',
        'teaching',
        'security',
        'cleaning',
        'administration',
        'accounting',
        'employee_id'

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

public function attendance()
    {
        return $this->HasMany(Attendance::class);
    }

public function report()
    {
        return $this->HasMany(Report::class);
    }
    public function employee()
    {
        return $this->HasMany(Employee::class);
    }
}