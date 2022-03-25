<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded=[''];


    public function menu_footer(){
        return  $this->hasMany(MenuFooter::class,'menu_id', 'id');
}
    public function sub_menu(){
        return  $this->hasMany(SubMenu::class,'menu_id', 'id');
    }
    public function navigations(){
        return  $this->belongsTo(NavigationBar::class,'navigation_bar_id', 'id');
    }


    protected $casts = [
        'name' => 'array',
    ];


}
