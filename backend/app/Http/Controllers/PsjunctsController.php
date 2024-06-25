<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Http\ResponseFactory;
use App\Models\Psjuncts;

class PsjunctsController extends Controller 
{

    public function mixshow($id)
    {
        $psjuncts = Psjuncts::select('pictures.file as pictures_file', 'sounds.file as sounds_file')->join('pictures', 'psjuncts.pictures_id', '=', 'pictures.id')->join('sounds', 'psjuncts.sounds_id', '=', 'sounds.id')->where('psjuncts.categories_id', $id)->get();

        return response()->json($psjuncts);
    }
}