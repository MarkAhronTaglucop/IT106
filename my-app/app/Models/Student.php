<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = '_Students';
    protected $primaryKey = 'id';
    protected $fillable = [
            'name',
            'age',
            'address',
            'number',
        ];

    use HasFactory;
}
