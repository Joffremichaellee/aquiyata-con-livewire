<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('categorias');
        Storage::makeDirectory('categorias');

        // \App\Models\User::factory(10)->create();
        \App\Models\Categoria::factory(100)->create();
    }
}
