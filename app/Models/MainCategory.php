<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    protected $guarded=[''];
    protected $casts = [
        'name' => 'array',
        'containt' => 'array',
        'short_description' => 'array',
    ];

    public function articles(){

        return $this->hasMany(Blog::class,'main_category_id','id');
    }
}
