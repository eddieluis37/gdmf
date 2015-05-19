<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    
	public $table = "productors";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name",
		"identificacion",
		"phone",
		"celular",
		"email",
		"address",
		"asociacion"
	];

	public static $rules = [
	    "name" => "required",
		"identificacion" => "required|unique:productors",
		"celular" => "max:10",
		"email" => "required|unique:productors",
		"address" => "max:300"
	];

}
