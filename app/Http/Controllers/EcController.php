<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EcController extends Controller
{
    public function index(Request $request){
        return view('ec.index');
    }
    public function adminindex(Request $request){
        return view('ec.adminindex');
    }
}
