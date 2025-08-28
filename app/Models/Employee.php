<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
protected $perpage = 10;

    protected $fillable = [
        'identification_employee',
        'name',
        'address',
        'telephone',
        'email',
        'profession',
        'entry_date',
        'ID_document',
        'country',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }



    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }


    public function justification()
    {
        return $this->hasMany(Justification::class);
    }

public function area()
    {
        return $this->belongsTo(Area::class);
    }

    

}
