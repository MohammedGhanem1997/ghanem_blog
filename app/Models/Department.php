<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

protected $guarded=[''];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    public function employees (){

        return $this->hasMany(Employee::class,'department_id');
    }
}
