<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function validate(FoodRequest $request) {
	return view('food.add');
    }
} 
