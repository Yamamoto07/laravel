<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Request $request)
    {
	$items = Food::all();
	return view('food.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
	return view('food.find', ['input' => '']);
    }

    public function search(Request $request)
    {
	// find()⇨id検索、where()⇨name検索    
	$item = Food::where('name', $request->input)->first();
	$param = ['input' => $request->input, 'item' => $item];
	return view('food.find', $param);
    }

    public function add(Request $request)
    {
	return view('food.add');
    }

    public function create(Request $request)
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

    public function update(Request $request)
    {
	// バリデーションを実行    
	$this->validate($request, Food::$rules);
	
	// 送られてきたIDで食材を特定してインスタンスを生成する。
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
	Food::find($request->id)->delete();
	return redirect('/food');
    }
}
