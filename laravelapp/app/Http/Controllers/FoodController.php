<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AppRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(Request $request)
    {
	if(!$request->sort) {
	    $sort = "limit";
	} else {
            $sort = $request->sort;
        }
	$items = Food::orderBy($sort, 'asc')->Paginate(10);
	$param = ['items' => $items, 'sort' => $sort];
	return view('food.food', $param);
    }

    public function add(Request $request)
    {
	return view('food.add');
    }

    public function create(AppRequest $request)
    {
	$this->validate($request, Food::$rules);
	$food = new Food;
	$form = $request->all();
	unset($form['_token']);
	$food->fill($form)->save();
	return redirect('/food');
    }

    public function edit(Request $request)
    {
	$food = Food::find($request->id);
	return view('food.edit', ['form' => $food]);
    }

    public function update(AppRequest $request)
    {
	$this->validate($request, Food::$rules);
	$food = Food::find($request->id);
	$form = $request->all();
	unset($form['_token']);
	$food->fill($form)->save();
	return redirect('/food');
    }

    public function delete(Request $request)
    {
	$food = Food::find($request->id);
	return view('food.delete', ['form' => $food]);
    }

    public function remove(Request $request)
    {
	$food = Food::find($request->id);
	$food -> delete();
	return redirect('/food');
    }
}
