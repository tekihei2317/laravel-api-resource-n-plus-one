<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskStatus::query()->delete();

        $statuses = [
            [
                'name' => 'OPEN',
                'description' => '未着手'
            ],
            [
                'name' => 'PENDING',
                'description' => '検討中・設計中'
            ],
            [
                'name' => 'IN PROGRESS',
                'description' => '実行中'
            ],
            [
                'name' => 'IN REVIEW',
                'description' => 'レビュー中'
            ],
            [
                'name' => 'CLOSED',
                'description' => '完了'
            ]
        ];

        foreach ($statuses as $status) {
            TaskStatus::create($status);
        }
    }
}
