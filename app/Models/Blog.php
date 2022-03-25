<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $guarded=[''];
    protected $casts = [
        'short_description' => 'array',
        'title' => 'array',
        'containt' => 'array',
    ];
    public function category(){

        return $this->belongsTo(MainCategory::class,'main_category_id','id');
    }
    public function comments(){

    return $this->hasMany(Comment::class,'article_id','id');
}

}
