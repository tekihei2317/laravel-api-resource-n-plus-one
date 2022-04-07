<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(
        private Task $taskModel,
    ) {
    }

    /** タスク一覧を取得する */
    public function index()
    {
        return TaskResource::collection($this->taskModel->all());
    }
}
