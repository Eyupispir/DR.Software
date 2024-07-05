<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //showing the test page
    public function testPage(){
        return view('layout.app');


    }
}
