<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use App\Repositories\ContratoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContratoController extends AppBaseController
{
    /** @var  ContratoRepository */
    private $contratoRepository;

    public function __construct(ContratoRepository $contratoRepo)
    {
        $this->contratoRepository = $contratoRepo;
    }

    /**
     * Display a listing of the Contrato.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contratos = $this->contratoRepository->all();

        return view('contratos.index')
            ->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new Contrato.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created Contrato in storage.
     *
     * @param CreateContratoRequest $request
     *
     * @return Response
     */
    public function store(CreateContratoRequest $request)
    {
        $input = $request->all();

        $contrato = $this->contratoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified Contrato.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contrato = $this->contratoRepository->find($id);

        if (empty($contrato)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        return view('contratos.show')->with('contrato', $contrato);
    }

    /**
     * Show the form for editing the specified Contrato.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contrato = $this->contratoRepository->find($id);

        if (empty($contrato)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        return view('contratos.edit')->with('contrato', $contrato);
    }

    /**
     * Update the specified Contrato in storage.
     *
     * @param int $id
     * @param UpdateContratoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratoRequest $request)
    {
        $contrato = $this->contratoRepository->find($id);

        if (empty($contrato)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        $contrato = $this->contratoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified Contrato from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contrato = $this->contratoRepository->find($id);

        if (empty($contrato)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        $this->contratoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }
}
