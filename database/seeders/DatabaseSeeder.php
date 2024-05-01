<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\Models\Finn;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    //Think of this as "global"
    public function run(): void
    {
       $this->call(FinnTableSeeder::class);
       $this->call(AuthorTableSeeder::class);
       //Other tables called here
    }
}
