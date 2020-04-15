<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogChamadaRequest;
use App\Http\Requests\UpdateLogChamadaRequest;
use App\Repositories\LogChamadaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LogChamadaController extends AppBaseController
{
    /** @var  LogChamadaRepository */
    private $logChamadaRepository;

    public function __construct(LogChamadaRepository $logChamadaRepo)
    {
        $this->logChamadaRepository = $logChamadaRepo;
    }

    /**
     * Display a listing of the LogChamada.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logChamadas = $this->logChamadaRepository->all();

        return view('log_chamadas.index')
            ->with('logChamadas', $logChamadas);
    }

    /**
     * Show the form for creating a new LogChamada.
     *
     * @return Response
     */
    public function create()
    {
        return view('log_chamadas.create');
    }

    /**
     * Store a newly created LogChamada in storage.
     *
     * @param CreateLogChamadaRequest $request
     *
     * @return Response
     */
    public function store(CreateLogChamadaRequest $request)
    {
        $input = $request->all();

        $logChamada = $this->logChamadaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/logChamadas.singular')]));

        return redirect(route('logChamadas.index'));
    }

    /**
     * Display the specified LogChamada.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logChamada = $this->logChamadaRepository->find($id);

        if (empty($logChamada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logChamadas.singular')]));

            return redirect(route('logChamadas.index'));
        }

        return view('log_chamadas.show')->with('logChamada', $logChamada);
    }

    /**
     * Show the form for editing the specified LogChamada.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logChamada = $this->logChamadaRepository->find($id);

        if (empty($logChamada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logChamadas.singular')]));

            return redirect(route('logChamadas.index'));
        }

        return view('log_chamadas.edit')->with('logChamada', $logChamada);
    }

    /**
     * Update the specified LogChamada in storage.
     *
     * @param int $id
     * @param UpdateLogChamadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogChamadaRequest $request)
    {
        $logChamada = $this->logChamadaRepository->find($id);

        if (empty($logChamada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logChamadas.singular')]));

            return redirect(route('logChamadas.index'));
        }

        $logChamada = $this->logChamadaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/logChamadas.singular')]));

        return redirect(route('logChamadas.index'));
    }

    /**
     * Remove the specified LogChamada from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logChamada = $this->logChamadaRepository->find($id);

        if (empty($logChamada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logChamadas.singular')]));

            return redirect(route('logChamadas.index'));
        }

        $this->logChamadaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/logChamadas.singular')]));

        return redirect(route('logChamadas.index'));
    }
}
