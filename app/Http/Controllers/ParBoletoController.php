<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParBoletoRequest;
use App\Http\Requests\UpdateParBoletoRequest;
use App\Repositories\ParBoletoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParBoletoController extends AppBaseController
{
    /** @var  ParBoletoRepository */
    private $parBoletoRepository;

    public function __construct(ParBoletoRepository $parBoletoRepo)
    {
        $this->parBoletoRepository = $parBoletoRepo;
    }

    /**
     * Display a listing of the ParBoleto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parBoletos = $this->parBoletoRepository->all();

        return view('par_boletos.index')
            ->with('parBoletos', $parBoletos);
    }

    /**
     * Show the form for creating a new ParBoleto.
     *
     * @return Response
     */
    public function create()
    {
        return view('par_boletos.create');
    }

    /**
     * Store a newly created ParBoleto in storage.
     *
     * @param CreateParBoletoRequest $request
     *
     * @return Response
     */
    public function store(CreateParBoletoRequest $request)
    {
        $input = $request->all();

        $parBoleto = $this->parBoletoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/parBoletos.singular')]));

        return redirect(route('parBoletos.index'));
    }

    /**
     * Display the specified ParBoleto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parBoleto = $this->parBoletoRepository->find($id);

        if (empty($parBoleto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletos.singular')]));

            return redirect(route('parBoletos.index'));
        }

        return view('par_boletos.show')->with('parBoleto', $parBoleto);
    }

    /**
     * Show the form for editing the specified ParBoleto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parBoleto = $this->parBoletoRepository->find($id);

        if (empty($parBoleto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletos.singular')]));

            return redirect(route('parBoletos.index'));
        }

        return view('par_boletos.edit')->with('parBoleto', $parBoleto);
    }

    /**
     * Update the specified ParBoleto in storage.
     *
     * @param int $id
     * @param UpdateParBoletoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParBoletoRequest $request)
    {
        $parBoleto = $this->parBoletoRepository->find($id);

        if (empty($parBoleto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletos.singular')]));

            return redirect(route('parBoletos.index'));
        }

        $parBoleto = $this->parBoletoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/parBoletos.singular')]));

        return redirect(route('parBoletos.index'));
    }

    /**
     * Remove the specified ParBoleto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parBoleto = $this->parBoletoRepository->find($id);

        if (empty($parBoleto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletos.singular')]));

            return redirect(route('parBoletos.index'));
        }

        $this->parBoletoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/parBoletos.singular')]));

        return redirect(route('parBoletos.index'));
    }
}
