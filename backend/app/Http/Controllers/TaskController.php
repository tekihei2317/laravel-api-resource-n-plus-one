<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct(
        private Task $taskModel,
    ) {
    }

    /**
     * タスク詳細を取得する
     */
    public function show(Task $task)
    {
        $task->load('status');

        return TaskResource::make($task);
    }

    /**
     * タスク一覧を取得する
     */
    public function index()
    {
        return TaskResource::collection($this->taskModel->with('status')->get());
    }
}
