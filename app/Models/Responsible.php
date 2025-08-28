<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    /** @use HasFactory<\Database\Factories\ResponsableFactory> */
    use HasFactory;
    protected $perpage = 10;

    protected $fillable = [
        'id_responsible',
        'name',
        'email',
        'phone',
    ];

    

    public function employee()
    {
        return $this->HasMany(Employee::class);
    }

   
}
