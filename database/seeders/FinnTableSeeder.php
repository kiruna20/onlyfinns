<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    $finns = [
        ['name' => 'Koskinen', 'canon' => 'The Winter War'],
        ['name' => 'Matti', 'canon' => 'The Winter War'],
        ['name' => 'Almqvist', 'canon' => 'Kalevala'],
        ['name' => 'Ponti', 'canon' => 'Moominvalley'],
        ['name' => 'Mannerheim', 'canon' => 'Ylilauta'],
    ];

    foreach ($finns as $finnData) {
        Finn::create($finnData);
    }
}
