<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(request $request)
    {
	$items =  DB::table('food')->get();
        return view('index.index', ['items' => $items]);
    }

}
