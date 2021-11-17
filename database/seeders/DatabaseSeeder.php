<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PlasticTypesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PlasticTypesSeeder::class]);
        // \App\Models\User::factory(10)->create();
    }
}
