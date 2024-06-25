<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Players;

class PlayersController extends Controller 
{
    public function index()
    {
        $players = Players::all();
        return response()->json($players);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $players = Players::create($data);
        return response()->json($players);
    }

    public function show($id)
    {
        $players = Players::find($id);
        return response()->json($players);
    }

    public function update(Request $request, $id)
    {
        $players = Players::find($id);
        
        if (!$players) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, ["name" => "required"]);
        $data = $request->all();
        $players->fill($data);
        $players->save();
        return response()->json($players);
    }

    public function destroy($id)
    {
        $players = Players::find($id);
        
        if (!$players) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $players->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}