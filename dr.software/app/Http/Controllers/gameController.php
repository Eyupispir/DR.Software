<?php

namespace App\Http\Controllers;

use App\Models\scene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    
    public function showPage(Request $request)
    {

        $id = $request['id'];
        $scene = DB::table('scene')->where('id', $id)->first();
        $node = $scene->adress;
        $response = $scene->state;
        $response = json_decode($response, true);



        if (is_null($node)) {
            $node = 1;
            return view('interface.gamePage', compact('node','response','id'));
        } else {

            return view('interface.gamePage', compact('node','response','id'))->with('success','response');
        }
    }
    public function deleteScene(Request $request)
    {

        $id = $request['id'];
        $scene = scene::find($id);
        $scene->delete();
        return redirect()->route('mainpage');
    }
}
