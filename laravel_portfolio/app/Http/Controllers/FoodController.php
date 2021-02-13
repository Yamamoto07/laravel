<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Controllers\Controller;
use App\Http\Requests\FoodRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    public function index(Request $request)
    {
	$items = DB::table('food')->simplePaginate(10);
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

    // FoodRequestに設定した内容を元にバリデーションが実行するため、
    // FoodRequest $requestの引数を渡す。
    public function create(FoodRequest $request)
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

    // FoodRequestに設定した内容を元にバリデーションが実行するため、
    // FoodRequest $requestの引数を渡す。
    public function update(FoodRequest $request)
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
