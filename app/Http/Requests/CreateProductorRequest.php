<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Productor;

class CreateProductorRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

	/*public function rules()
	{
		return Productor::$rules;
	}
    */
    public function rules()
    {
        return [
            'first_Name' => 'required|alpha',
            'last_Name'  => 'required|alpha',
            'identificacion' => 'required|unique:productors',
            'celular" => "max:10',
            'email' => 'required|unique:productors',
            'address" => "max:300'
        ];
    }


}
