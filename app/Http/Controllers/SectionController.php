<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $model = Section::all();

        return response()->json([
            'data' => $model
        ]);
    }

    public function show($id)
    {
        $model = Section::find($id);

        return response()->json([
            'data' => $model
        ]);
    }

    public function store(Request $request)
    {
        $model = new Section();
        $model->name = $request->name;
        $model->save();

        return response()->json([
            'msg' => 'insert successfully',
            'data' => $model
        ]);
    }

    public function update($id, Request $request)
    {
        $model = Section::find($id);
        $model->name = $request->name;
        $model->save();

        return response()->json([
            'msg' => 'Update successfully',
            'data' => $model
        ]);
    }

    public function destroy($id)
    {
        $model = Section::find($id);

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
