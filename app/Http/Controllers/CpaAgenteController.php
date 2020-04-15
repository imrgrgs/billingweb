<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCpaAgenteRequest;
use App\Http\Requests\UpdateCpaAgenteRequest;
use App\Repositories\CpaAgenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CpaAgenteController extends AppBaseController
{
    /** @var  CpaAgenteRepository */
    private $cpaAgenteRepository;

    public function __construct(CpaAgenteRepository $cpaAgenteRepo)
    {
        $this->cpaAgenteRepository = $cpaAgenteRepo;
    }

    /**
     * Display a listing of the CpaAgente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cpaAgentes = $this->cpaAgenteRepository->all();

        return view('cpa_agentes.index')
            ->with('cpaAgentes', $cpaAgentes);
    }

    /**
     * Show the form for creating a new CpaAgente.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpa_agentes.create');
    }

    /**
     * Store a newly created CpaAgente in storage.
     *
     * @param CreateCpaAgenteRequest $request
     *
     * @return Response
     */
    public function store(CreateCpaAgenteRequest $request)
    {
        $input = $request->all();

        $cpaAgente = $this->cpaAgenteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cpaAgentes.singular')]));

        return redirect(route('cpaAgentes.index'));
    }

    /**
     * Display the specified CpaAgente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cpaAgente = $this->cpaAgenteRepository->find($id);

        if (empty($cpaAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaAgentes.singular')]));

            return redirect(route('cpaAgentes.index'));
        }

        return view('cpa_agentes.show')->with('cpaAgente', $cpaAgente);
    }

    /**
     * Show the form for editing the specified CpaAgente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cpaAgente = $this->cpaAgenteRepository->find($id);

        if (empty($cpaAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaAgentes.singular')]));

            return redirect(route('cpaAgentes.index'));
        }

        return view('cpa_agentes.edit')->with('cpaAgente', $cpaAgente);
    }

    /**
     * Update the specified CpaAgente in storage.
     *
     * @param int $id
     * @param UpdateCpaAgenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCpaAgenteRequest $request)
    {
        $cpaAgente = $this->cpaAgenteRepository->find($id);

        if (empty($cpaAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaAgentes.singular')]));

            return redirect(route('cpaAgentes.index'));
        }

        $cpaAgente = $this->cpaAgenteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cpaAgentes.singular')]));

        return redirect(route('cpaAgentes.index'));
    }

    /**
     * Remove the specified CpaAgente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cpaAgente = $this->cpaAgenteRepository->find($id);

        if (empty($cpaAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaAgentes.singular')]));

            return redirect(route('cpaAgentes.index'));
        }

        $this->cpaAgenteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cpaAgentes.singular')]));

        return redirect(route('cpaAgentes.index'));
    }
}
