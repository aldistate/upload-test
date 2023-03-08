<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // membuat user dengan nama, email, dan password yg sesuai dengan yg diketik dibawah
        User::create([
            'name' => 'Aldi Putra Nawasta',
            'email' => 'aldi.putra.nawasta@gmail.com',
            'password' => bcrypt('aldistate'),
        ]);

        // membuat user dengan value random yang sesuai dengan UserFactory
        User::factory(5)->create();

        // membuat Cuti dengan value random yang sesuai dengan CutiFactory
        Cuti::factory(3)->create();
    }
}
