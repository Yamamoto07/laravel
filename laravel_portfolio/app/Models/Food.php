<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
	'name' => 'required',
	'quantity' => 'integer',
	'unit' => 'required'
    );
}
