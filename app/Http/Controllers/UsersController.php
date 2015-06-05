<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function getOrm()
    {
        $users = User::select('id', 'first_name')

            ->with('profile')
            ->where('first_name', '<>', 'Eddie')
            ->orderBy('first_name', 'ASC')
            ->get();


        dd($users->toArray());
    }



	public function getIndex()
	{
		$result =\DB::table('users')
            ->select(
                'users.*',
                'user_profiles.id as profiles_id',
                'user_profiles.twitter',
                'user_profiles.birthdate'

            )
         // ->where('first_name', '=', 'Eddie')
            ->orderBy('id', 'ASC')
            ->leftjoin('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->get();

        foreach ($result as $row)
        {
            $row->full_name = $row->first_name . ' ' . $row->last_name;
            $row->age = \Carbon\Carbon::parse($row->birthdate)->age;
        }

        dd($result);

        return $result;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
