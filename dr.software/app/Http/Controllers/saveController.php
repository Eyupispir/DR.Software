<?php

namespace App\Http\Controllers;

use App\Models\scene;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class saveController extends Controller
{
   
    public function save(Request $request)
    {
        $userId = Auth::id();
        $adress = $request['id'];
        $id = $request['di'];
        $data = $request['data'];

        $jsonData = json_encode($data);
        DB::update('update scene set state = ? where id = ?', [$jsonData, $id]);
        DB::update('update scene set adress = ? where id = ?', [$adress, $id]);

        DB::update('update scene set updated_at = ? where id = ?', [Carbon::now(), $id]);


    }

    public function saveStatus(Request $req)
    {

        dd($req->all());
    }
}
