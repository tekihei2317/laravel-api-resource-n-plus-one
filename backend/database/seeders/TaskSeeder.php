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
        $tasks = [
            [
                'name' => 'todo1',
                'description' => '1つ目',
                'task_status_id' => TaskStatus::OPEN->value,
            ],
            [
                'name' => 'todo2',
                'description' => '2つ目',
                'task_status_id' => TaskStatus::IN_PROGRESS->value,
            ],
            [
                'name' => 'todo3',
                'description' => '3つ目',
                'task_status_id' => TaskStatus::CLOSED->value,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
