<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstatisticaRequest;
use App\Http\Requests\UpdateEstatisticaRequest;
use App\Repositories\EstatisticaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EstatisticaController extends AppBaseController
{
    /** @var  EstatisticaRepository */
    private $estatisticaRepository;

    public function __construct(EstatisticaRepository $estatisticaRepo)
    {
        $this->estatisticaRepository = $estatisticaRepo;
    }

    /**
     * Display a listing of the Estatistica.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $estatisticas = $this->estatisticaRepository->all();

        return view('estatisticas.index')
            ->with('estatisticas', $estatisticas);
    }

    /**
     * Show the form for creating a new Estatistica.
     *
     * @return Response
     */
    public function create()
    {
        return view('estatisticas.create');
    }

    /**
     * Store a newly created Estatistica in storage.
     *
     * @param CreateEstatisticaRequest $request
     *
     * @return Response
     */
    public function store(CreateEstatisticaRequest $request)
    {
        $input = $request->all();

        $estatistica = $this->estatisticaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estatisticas.singular')]));

        return redirect(route('estatisticas.index'));
    }

    /**
     * Display the specified Estatistica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estatistica = $this->estatisticaRepository->find($id);

        if (empty($estatistica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estatisticas.singular')]));

            return redirect(route('estatisticas.index'));
        }

        return view('estatisticas.show')->with('estatistica', $estatistica);
    }

    /**
     * Show the form for editing the specified Estatistica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estatistica = $this->estatisticaRepository->find($id);

        if (empty($estatistica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estatisticas.singular')]));

            return redirect(route('estatisticas.index'));
        }

        return view('estatisticas.edit')->with('estatistica', $estatistica);
    }

    /**
     * Update the specified Estatistica in storage.
     *
     * @param int $id
     * @param UpdateEstatisticaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstatisticaRequest $request)
    {
        $estatistica = $this->estatisticaRepository->find($id);

        if (empty($estatistica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estatisticas.singular')]));

            return redirect(route('estatisticas.index'));
        }

        $estatistica = $this->estatisticaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estatisticas.singular')]));

        return redirect(route('estatisticas.index'));
    }

    /**
     * Remove the specified Estatistica from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estatistica = $this->estatisticaRepository->find($id);

        if (empty($estatistica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estatisticas.singular')]));

            return redirect(route('estatisticas.index'));
        }

        $this->estatisticaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estatisticas.singular')]));

        return redirect(route('estatisticas.index'));
    }
}
