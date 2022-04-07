<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $appEnv = config('app.env');

        if ($appEnv === 'local') {
            $this->call(TaskStatusSeeder::class);
            $this->call(TaskSeeder::class);
        }
    }
}
