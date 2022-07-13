<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskController extends CustomController
{
    public function show()
    {
        $userId = Auth()->user()->id;
        $myTasks = Task::where('user_id', $userId)->get();


        return $this->sendResponse($myTasks, 'Job posts');
    }

    public function saveTask(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        try {
            Task::create($request->all() + ['user_id' => Auth()->user()->id]);
            return $this->sendResponse([], 'Successfully Sign up');
        } catch (\Throwable $t) {
            DB::rollback();
            Log::error($t);
            return $this->sendError(400, $t->getMessage());
        }
    }
}
