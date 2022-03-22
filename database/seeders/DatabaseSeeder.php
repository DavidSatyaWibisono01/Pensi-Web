<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pengunjung;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        // Pengunjung::factory(40)->create();
        // Instansi::factory(3)->create();

    }
}
