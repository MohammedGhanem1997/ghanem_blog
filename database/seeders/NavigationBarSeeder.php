<?php

namespace Database\Seeders;

use App\Models\NavigationBar;
use Illuminate\Database\Seeder;

class NavigationBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NavigationBar::create([
         'status' => true,

        'name' => ['ar'=>'أسفل الصفحة','en'=>'footer']
    ]);
        NavigationBar::create([
            'status' => true,
            'name' => ['ar'=>'رأس الصفحة','en'=>'header']
        ]);
        NavigationBar::create([
            'status' => true,
            'name' => ['ar'=>'الشريط الجانبي','en'=>'sidebar']
        ]);
    }
}
