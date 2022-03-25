<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'name' => 'face book',
            'icon' => 'defult',
            'url' => 'https://facebook.com/'
        ]);

        Social::create([
            'name' => 'twitter',
            'icon' => 'defult',
            'url' => 'https://twitter.com/'
        ]); Social::create([
        'name' => 'google+',
        'icon' => 'defult',
        'url' => 'https://google.com/'
    ]); Social::create([
        'name' => 'instagram',
        'icon' => 'defult',
        'url' => 'https://instagram.com/'
    ]); Social::create([
        'name' => 'linked in',
        'icon' => 'defult',
        'url' => 'https://linkedin.com/'
    ]);
    }
}
