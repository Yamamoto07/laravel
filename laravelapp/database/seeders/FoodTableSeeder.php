<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
	    'name' => 'キャベツ',
	    'quantity' => '1',
	    'unit' => '個',
	    'limit' => '2021/3/16'
	];
	DB::table('food')->insert($param);
	
	$param = [
	    'name' => '鶏肉',
	    'quantity' => '350',
	    'unit' => 'g',
	    'limit' => '2021/3/13'
	];
	DB::table('food')->insert($param);
	
	$param = [
	    'name' => '納豆',
	    'quantity' => '2',
	    'unit' => 'パック',
	    'limit' => '2021/4/1'
	];
	DB::table('food')->insert($param);
    }
}
