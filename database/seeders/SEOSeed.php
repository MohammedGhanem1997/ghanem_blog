<?php

namespace Database\Seeders;

use App\Models\SEO;
use Illuminate\Database\Seeder;

class SEOSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SEO::create([
            'meta' => 'title',
            'description' => 'description',
            'colunm_id'=> '1',
            'table' => 'Home',

        ]);
        SEO::create([
            'meta' => 'facebook',
            'description' => 'description',
            'table' => 'Home',
            'colunm_id'=> '1'
        ]); SEO::create([
        'meta' => 'instagram',
        'description' => 'description',
        'table' => 'Home',
        'colunm_id'=> '1'
    ]); SEO::create([
        'meta' => 'keyward',
        'description' => 'description',
        'table' => 'Home',
        'colunm_id'=> '1'
    ]); SEO::create([
        'meta' => 'description',
        'description' => 'description',
        'table' => 'Home',
        'colunm_id'=> '1'
    ]); SEO::create([
        'meta' => 'author',
        'description' => 'description',
        'table' => 'Home',
        'colunm_id'=> '1'
    ]); SEO::create([
        'meta' => 'viewport',
        'description' => 'description',
        'table' => 'Home',
        'colunm_id'=> '1'
    ]);
    }
}
