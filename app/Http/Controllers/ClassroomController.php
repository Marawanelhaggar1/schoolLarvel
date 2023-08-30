<?php

namespace App\Http\Controllers;

use App\Http\Requests\classroom\createClassroomRequest;
use App\Http\Requests\classroom\updateClassroomRequests;
use App\Http\Resources\ClassroomResources;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index(){
        $classroom = Classroom::all();

        return ClassroomResources::collection($classroom);
    }

    public function create(createClassroomRequest $request){
        $classroom = $request->CreateClassRoom();
        return new ClassroomResources($classroom);
    }

    public function update(updateClassroomRequests $request)
    {
        $classroom = $request->updateClassroom();
        return new ClassroomResources($classroom);
    }

    public function delete($id){
        $classroom=Classroom::findOrFail($id);
        $classroom->delete();

        return response()->json([
            'message' => 'Classroom deleted successfully'
        ]);
    }

}
