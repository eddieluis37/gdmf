<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    
	public $table = "productors";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "full_Name",
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



    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


}
