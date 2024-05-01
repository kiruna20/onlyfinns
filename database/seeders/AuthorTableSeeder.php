<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    $authors = [
        ['name' => 'Vaino Linna'],
        ['name' => 'Anon'],
        ['name' => 'Myth'],
        ['name' => 'Tove Jansson'],
        ['name' => 'Mannerheim'],
    ];

    foreach ($authors as $authorData) {
        Author::create($authorData);
    }
}
