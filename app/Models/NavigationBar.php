<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavigationBar extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $casts = [
        'name' => 'array',
    ];

    public function menus(){
        return  $this->hasMany(Menu::class,'navigation_bar_id', 'id');
    }
}
