<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Sounds;

class SoundsController extends Controller 
{
    public function index()
    {
        $sounds = Sounds::all();
        return response()->json($sounds);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $sounds = Sounds::create($data);
        return response()->json($sounds);
    }

    public function show($id)
    {
        $sounds = Sounds::find($id);
        return response()->json($sounds);
    }

    public function by_categories($id) 
    {
        $sounds = Sounds::where('categories_id', $id)->get();
        return response()->json($sounds);
    }

    public function update(Request $request, $id)
    {
        $sounds = Sounds::find($id);
        
        if (!$sounds) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, ["name" => "required", "file" => "required"]);
        $data = $request->all();
        $sounds->fill($data);
        $sounds->save();
        return response()->json($sounds);
    }

    public function destroy($id)
    {
        $sounds = Sounds::find($id);
        
        if (!$sounds) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $sounds->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}