<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrecAgenteRequest;
use App\Http\Requests\UpdateCrecAgenteRequest;
use App\Repositories\CrecAgenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CrecAgenteController extends AppBaseController
{
    /** @var  CrecAgenteRepository */
    private $crecAgenteRepository;

    public function __construct(CrecAgenteRepository $crecAgenteRepo)
    {
        $this->crecAgenteRepository = $crecAgenteRepo;
    }

    /**
     * Display a listing of the CrecAgente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $crecAgentes = $this->crecAgenteRepository->all();

        return view('crec_agentes.index')
            ->with('crecAgentes', $crecAgentes);
    }

    /**
     * Show the form for creating a new CrecAgente.
     *
     * @return Response
     */
    public function create()
    {
        return view('crec_agentes.create');
    }

    /**
     * Store a newly created CrecAgente in storage.
     *
     * @param CreateCrecAgenteRequest $request
     *
     * @return Response
     */
    public function store(CreateCrecAgenteRequest $request)
    {
        $input = $request->all();

        $crecAgente = $this->crecAgenteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/crecAgentes.singular')]));

        return redirect(route('crecAgentes.index'));
    }

    /**
     * Display the specified CrecAgente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crecAgente = $this->crecAgenteRepository->find($id);

        if (empty($crecAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecAgentes.singular')]));

            return redirect(route('crecAgentes.index'));
        }

        return view('crec_agentes.show')->with('crecAgente', $crecAgente);
    }

    /**
     * Show the form for editing the specified CrecAgente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crecAgente = $this->crecAgenteRepository->find($id);

        if (empty($crecAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecAgentes.singular')]));

            return redirect(route('crecAgentes.index'));
        }

        return view('crec_agentes.edit')->with('crecAgente', $crecAgente);
    }

    /**
     * Update the specified CrecAgente in storage.
     *
     * @param int $id
     * @param UpdateCrecAgenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrecAgenteRequest $request)
    {
        $crecAgente = $this->crecAgenteRepository->find($id);

        if (empty($crecAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecAgentes.singular')]));

            return redirect(route('crecAgentes.index'));
        }

        $crecAgente = $this->crecAgenteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/crecAgentes.singular')]));

        return redirect(route('crecAgentes.index'));
    }

    /**
     * Remove the specified CrecAgente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crecAgente = $this->crecAgenteRepository->find($id);

        if (empty($crecAgente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecAgentes.singular')]));

            return redirect(route('crecAgentes.index'));
        }

        $this->crecAgenteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/crecAgentes.singular')]));

        return redirect(route('crecAgentes.index'));
    }
}
