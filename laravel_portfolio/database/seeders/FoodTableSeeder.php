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
            'name' => '卵',
	    'quantity' => 4,
	    'unit' => '個',
	];
	DB::table('food')->insert($param);

	$param = [
            'name' => '豚肉',
	    'quantity' => 250,
	    'unit' => 'g',
	];
	DB::table('food')->insert($param);

	$param = [
            'name' => 'キャベツ',
	    'quantity' => 0.5,
	    'unit' => '個',
	];
	DB::table('food')->insert($param);   
    }
}
