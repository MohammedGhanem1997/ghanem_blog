<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuFooter extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $casts = [
        'name' => 'array',
    ];

    public function menu(){
      return  $this->belongsTo(Menu::class,'menu_id');

    }
}
