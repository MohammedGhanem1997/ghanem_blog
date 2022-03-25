<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $table='sub_menus';
    protected $guarded=[''];
    protected $casts = [
        'name' => 'array',

    ];
    public function menu(){
        return  $this->belongsTo(Menu::class,'menu_id', 'id');
    }
}
