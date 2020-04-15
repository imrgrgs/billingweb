<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdemTerminacaoIaRequest;
use App\Http\Requests\UpdateOrdemTerminacaoIaRequest;
use App\Repositories\OrdemTerminacaoIaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrdemTerminacaoIaController extends AppBaseController
{
    /** @var  OrdemTerminacaoIaRepository */
    private $ordemTerminacaoIaRepository;

    public function __construct(OrdemTerminacaoIaRepository $ordemTerminacaoIaRepo)
    {
        $this->ordemTerminacaoIaRepository = $ordemTerminacaoIaRepo;
    }

    /**
     * Display a listing of the OrdemTerminacaoIa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ordemTerminacaoIas = $this->ordemTerminacaoIaRepository->all();

        return view('ordem_terminacao_ias.index')
            ->with('ordemTerminacaoIas', $ordemTerminacaoIas);
    }

    /**
     * Show the form for creating a new OrdemTerminacaoIa.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordem_terminacao_ias.create');
    }

    /**
     * Store a newly created OrdemTerminacaoIa in storage.
     *
     * @param CreateOrdemTerminacaoIaRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdemTerminacaoIaRequest $request)
    {
        $input = $request->all();

        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ordemTerminacaoIas.singular')]));

        return redirect(route('ordemTerminacaoIas.index'));
    }

    /**
     * Display the specified OrdemTerminacaoIa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->find($id);

        if (empty($ordemTerminacaoIa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemTerminacaoIas.singular')]));

            return redirect(route('ordemTerminacaoIas.index'));
        }

        return view('ordem_terminacao_ias.show')->with('ordemTerminacaoIa', $ordemTerminacaoIa);
    }

    /**
     * Show the form for editing the specified OrdemTerminacaoIa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->find($id);

        if (empty($ordemTerminacaoIa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemTerminacaoIas.singular')]));

            return redirect(route('ordemTerminacaoIas.index'));
        }

        return view('ordem_terminacao_ias.edit')->with('ordemTerminacaoIa', $ordemTerminacaoIa);
    }

    /**
     * Update the specified OrdemTerminacaoIa in storage.
     *
     * @param int $id
     * @param UpdateOrdemTerminacaoIaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdemTerminacaoIaRequest $request)
    {
        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->find($id);

        if (empty($ordemTerminacaoIa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemTerminacaoIas.singular')]));

            return redirect(route('ordemTerminacaoIas.index'));
        }

        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ordemTerminacaoIas.singular')]));

        return redirect(route('ordemTerminacaoIas.index'));
    }

    /**
     * Remove the specified OrdemTerminacaoIa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordemTerminacaoIa = $this->ordemTerminacaoIaRepository->find($id);

        if (empty($ordemTerminacaoIa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemTerminacaoIas.singular')]));

            return redirect(route('ordemTerminacaoIas.index'));
        }

        $this->ordemTerminacaoIaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ordemTerminacaoIas.singular')]));

        return redirect(route('ordemTerminacaoIas.index'));
    }
}
