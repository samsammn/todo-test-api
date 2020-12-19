<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $model = Task::all();

        return response()->json([
            'data' => $model
        ]);
    }

    public function show($id)
    {
        $model = Task::find($id);

        return response()->json([
            'data' => $model
        ]);
    }

    public function store(Request $request)
    {
        $model = new Task();
        $model->section_id = $request->section_id;
        $model->task = $request->task;
        $model->state = $request->state;
        $model->save();

        return response()->json([
            'msg' => 'insert successfully',
            'data' => $model
        ]);
    }

    public function update($id, Request $request)
    {
        $model = Task::find($id);
        $model->section_id = $request->section_id;
        $model->task = $request->task;
        $model->state = $request->state;
        $model->save();

        return response()->json([
            'msg' => 'Update successfully',
            'data' => $model
        ]);
    }

    public function destroy($id)
    {
        $model = Task::find($id);

        if ($model != null) {
            $model->delete();

            return response()->json([
                'msg' => 'Deleted successfully',
                'data' => $model
            ]);
        }

        return response()->json([
            'msg' => 'Data not found',
            'data' => []
        ]);
    }
}
