<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Results;
use App\Models\Players;

class ResultsController extends Controller 
{
    public function index()
    {
        $results = Results::all();
        return response()->json($results);
    }

    public function mixshow($id)
    {
        $results = Results::select('score','players.name as players_name', 'categories.name as categories_name')->join('players', 'results.players_id', '=', 'players.id')->join('categories', 'results.categories_id', '=', 'categories.id')->where('results.id', $id)->get();

        return response()->json($results);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $results = Results::create($data);
        return response()->json($results);
    }

    public function mixcreate(Request $request)
    {      
        $this->validate($request, [
            "name" => "required",
            "score" => "required",
            "categories_id" => "required"
        ]);
        
        $playerData = ['name' => $request->input('name')];
        $players = Players::create($playerData);
        $resultData = [
            'players_id' => $players->id,
            'categories_id' => $request->input('categories_id'),
            'score' => $request->input('score'),
        ];
        $res = Results::create($resultData);
        
        return response()->json($res);
    }


    public function show($id)
    {
        $results = Results::find($id);
        return response()->json($results);
    }

    public function update(Request $request, $id)
    {
        $results = Results::find($id);
        
        if (!$results) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, ["score" => "required"]);
        $data = $request->all();
        $results->fill($data);
        $results->save();
        return response()->json($results);
    }

    public function destroy($id)
    {
        $results = Results::find($id);
        
        if (!$results) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $results->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}