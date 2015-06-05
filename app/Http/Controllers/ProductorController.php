<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductorRequest;
use App\Libraries\Repositories\ProductorRepository;
use App\Models\Productor;
use Illuminate\Support\Facades\Validator;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class ProductorController extends AppBaseController
{

	/** @var  ProductorRepository */
	private $productorRepository;

	function __construct(ProductorRepository $productorRepo)
	{
		$this->productorRepository = $productorRepo;
	}

	/**
	 * Display a listing of the Productor.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productors = $this->productorRepository->all();

		return view('productors.index')->with('productors', $productors);
	}

	/**
	 * Show the form for creating a new Productor.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productors.create');
	}

	/**
	 * Store a newly created Productor in storage.
	 *
	 * @param CreateProductorRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductorRequest $request)
	{
        $data = Requests::all();

        $rules = array(
            'first_name' => 'required',
            'second_name' => 'required',
            'last_name' => 'required',
            'secondlast_name' => 'required',
            'identificacion' => 'required',
            'phone' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'address' => 'required',
            'asociacion' => 'required',
            'name' => 'required',
        );

        $v = Validator::make($data, $rules);

        if ($v->fails())
        {
           dd ($v->erros());
            return redirect()->back()
                ->withErrors($v->erros())
                ->withInput(Requests::except('name'));

        }


        //Validator::make($data, $rules);

        $input = $request->all();

		$productor = $this->productorRepository->store($input);

		Flash::message('Productor guardado exitosamente.');

		return redirect(route('productors.index'));
	}

	/**
	 * Display the specified Productor.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productor = $this->productorRepository->findProductorById($id);

		if(empty($productor))
		{
			Flash::error('Productor not found');
			return redirect(route('productors.index'));
		}

		return view('productors.show')->with('productor', $productor);
	}

	/**
	 * Show the form for editing the specified Productor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productor = $this->productorRepository->findProductorById($id);

		if(empty($productor))
		{
			Flash::error('Productor no encontrado');
			return redirect(route('productors.index'));
		}

		return view('productors.edit')->with('productor', $productor);
	}

	/**
	 * Update the specified Productor in storage.
	 *
	 * @param  int    $id
	 * @param CreateProductorRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateProductorRequest $request)
	{
		$productor = $this->productorRepository->findProductorById($id);

		if(empty($productor))
		{
			Flash::error('Productor not found');
			return redirect(route('productors.index'));
		}

		$productor = $this->productorRepository->update($productor, $request->all());

		Flash::message('Productor actualizado.');

		return redirect(route('productors.index'));
	}

	/**
	 * Remove the specified Productor from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$productor = $this->productorRepository->findProductorById($id);

		if(empty($productor))
		{
			Flash::error('Productor no encontrado');
			return redirect(route('productors.index'));
		}

		$productor->delete();

		Flash::message('El Productor fue borrado exitosamente.');

		return redirect(route('productors.index'));
	}

}
