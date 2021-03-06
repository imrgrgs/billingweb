<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgenteRequest;
use App\Http\Requests\UpdateAgenteRequest;
use App\Repositories\AgenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AgenteController extends AppBaseController
{
    /** @var  AgenteRepository */
    private $agenteRepository;

    public function __construct(AgenteRepository $agenteRepo)
    {
        $this->agenteRepository = $agenteRepo;
    }

    /**
     * Display a listing of the Agente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $agentes = $this->agenteRepository->all();

        return view('agentes.index')
            ->with('agentes', $agentes);
    }

    /**
     * Show the form for creating a new Agente.
     *
     * @return Response
     */
    public function create()
    {
        return view('agentes.create');
    }

    /**
     * Store a newly created Agente in storage.
     *
     * @param CreateAgenteRequest $request
     *
     * @return Response
     */
    public function store(CreateAgenteRequest $request)
    {
        $input = $request->all();

        $agente = $this->agenteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/agentes.singular')]));

        return redirect(route('agentes.index'));
    }

    /**
     * Display the specified Agente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agente = $this->agenteRepository->find($id);

        if (empty($agente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentes.singular')]));

            return redirect(route('agentes.index'));
        }

        return view('agentes.show')->with('agente', $agente);
    }

    /**
     * Show the form for editing the specified Agente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agente = $this->agenteRepository->find($id);

        if (empty($agente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentes.singular')]));

            return redirect(route('agentes.index'));
        }

        return view('agentes.edit')->with('agente', $agente);
    }

    /**
     * Update the specified Agente in storage.
     *
     * @param int $id
     * @param UpdateAgenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgenteRequest $request)
    {
        $agente = $this->agenteRepository->find($id);

        if (empty($agente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentes.singular')]));

            return redirect(route('agentes.index'));
        }

        $agente = $this->agenteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/agentes.singular')]));

        return redirect(route('agentes.index'));
    }

    /**
     * Remove the specified Agente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agente = $this->agenteRepository->find($id);

        if (empty($agente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentes.singular')]));

            return redirect(route('agentes.index'));
        }

        $this->agenteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/agentes.singular')]));

        return redirect(route('agentes.index'));
    }
}
