<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteControl extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $casts = [
        'site_name' => 'array',
        'address' => 'array',


    ];
}
