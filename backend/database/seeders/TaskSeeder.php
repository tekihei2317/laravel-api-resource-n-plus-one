<?php

namespace Database\Seeders;

use App\Enum\TaskStatus;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Task::create([
                'name' => "todo{$i}",
                'description' => "{$i}個目",
                'task_status_id' => collect(TaskStatus::cases())->random()->value,
            ]);
        }
    }
}
