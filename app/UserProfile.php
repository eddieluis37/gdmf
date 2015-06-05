<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    //protected $table = 'perfiles_de_usuarios';

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthdate)->age;

    }

}
