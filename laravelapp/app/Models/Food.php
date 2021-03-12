<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = array(
	'name' => 'required',
	'quantity' => 'integer|min:0|max:10000',
	'unit' => 'required',
	'limit' => 'required'
    );
}
