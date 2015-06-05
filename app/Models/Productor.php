<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    
	public $table = "productors";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "first_Name",
		"second_Name",
        "last_Name",
        "secondlast_Name",
        "identificacion",
		"phone",
		"celular",
		"email",
		"address",
		"asociacion"
	];

	public static $rules = [
	    "first_Name" => "required|alpha",
        "last_Name"  => "required|alpha",
		"identificacion" => "required|unique:productors",
		"celular" => "max:10",
		"email" => "required|unique:productors",
		"address" => "max:300"
	];

    public function setEmailAttribute($value)
    {

        if (! empty ($value))
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }



}
