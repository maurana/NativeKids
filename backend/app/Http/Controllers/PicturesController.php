<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Pictures;

class PicturesController extends Controller 
{
    public function index()
    {
        $pictures = Pictures::all();
        return response()->json($pictures);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $pictures = Pictures::create($data);
        return response()->json($pictures);
    }

    public function show($id)
    {
        $pictures = Pictures::find($id);
        return response()->json($pictures);
    }

    public function by_categories($id) 
    {
        $pictures = Pictures::where('categories_id', $id)->get();
        return response()->json($pictures);
    }

    public function update(Request $request, $id)
    {
        $pictures = Pictures::find($id);
        
        if (!$pictures) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, ["name" => "required", "file" => "required"]);
        $data = $request->all();
        $pictures->fill($data);
        $pictures->save();
        return response()->json($pictures);
    }

    public function destroy($id)
    {
        $pictures = Pictures::find($id);
        
        if (!$pictures) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $pictures->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}