<?php

namespace App\Libraries\Repositories;


use App\Models\Productor;

class ProductorRepository
{

	/**
	 * Returns all Productors
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Productor::all();
	}

	/**
	 * Stores Productor into database
	 *
	 * @param array $input
	 *
	 * @return Productor
	 */
	public function store($input)
	{
		return Productor::create($input);
	}

	/**
	 * Find Productor by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Productor
	 */
	public function findProductorById($id)
	{
		return Productor::find($id);
	}

	/**
	 * Updates Productor into database
	 *
	 * @param Productor $productor
	 * @param array $input
	 *
	 * @return Productor
	 */
	public function update($productor, $input)
	{
		$productor->fill($input);
		$productor->save();

		return $productor;
	}
}