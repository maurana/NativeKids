<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Categories;

class CategoriesController extends Controller 
{
    public function index()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $categories = Categories::create($data);
        return response()->json($categories);
    }

    public function show($id)
    {
        $categories = Categories::find($id);
        return response()->json($categories);
    }

    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);
        
        if (!$categories) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, ["name" => "required"]);
        $data = $request->all();
        $categories->fill($data);
        $categories->save();
        return response()->json($categories);
    }

    public function destroy($id)
    {
        $categories = Categories::find($id);
        
        if (!$categories) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $categories->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}