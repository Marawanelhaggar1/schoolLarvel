<?php

namespace App\Http\Controllers;
use App\Models\Buildings;

use App\Http\Requests\buildings\createBuildingsRequest;
use App\Http\Requests\buildings\updateBuildingsRequest;


use App\Http\Resources\BuildingsResources;


use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    public function index()
    {
        $buildings = Buildings::all();

        return BuildingsResources::collection($buildings);
    }

    public function create(createBuildingsRequest $request){
        $building=$request->createBuildings();

        return new BuildingsResources($building);

    }

    public function update(updateBuildingsRequest $request){
        $building=$request->updateBuildings();

        return new BuildingsResources($building);
    }
    
    public function delete($id){
        $building=Buildings::findOrFail($id);
        $building->delete();

        return response()->json([
            'message' => 'Building deleted successfully'
        ]);
    }
}
