<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogTarifacaoRequest;
use App\Http\Requests\UpdateLogTarifacaoRequest;
use App\Repositories\LogTarifacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LogTarifacaoController extends AppBaseController
{
    /** @var  LogTarifacaoRepository */
    private $logTarifacaoRepository;

    public function __construct(LogTarifacaoRepository $logTarifacaoRepo)
    {
        $this->logTarifacaoRepository = $logTarifacaoRepo;
    }

    /**
     * Display a listing of the LogTarifacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logTarifacaos = $this->logTarifacaoRepository->all();

        return view('log_tarifacaos.index')
            ->with('logTarifacaos', $logTarifacaos);
    }

    /**
     * Show the form for creating a new LogTarifacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('log_tarifacaos.create');
    }

    /**
     * Store a newly created LogTarifacao in storage.
     *
     * @param CreateLogTarifacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateLogTarifacaoRequest $request)
    {
        $input = $request->all();

        $logTarifacao = $this->logTarifacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/logTarifacaos.singular')]));

        return redirect(route('logTarifacaos.index'));
    }

    /**
     * Display the specified LogTarifacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logTarifacao = $this->logTarifacaoRepository->find($id);

        if (empty($logTarifacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logTarifacaos.singular')]));

            return redirect(route('logTarifacaos.index'));
        }

        return view('log_tarifacaos.show')->with('logTarifacao', $logTarifacao);
    }

    /**
     * Show the form for editing the specified LogTarifacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logTarifacao = $this->logTarifacaoRepository->find($id);

        if (empty($logTarifacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logTarifacaos.singular')]));

            return redirect(route('logTarifacaos.index'));
        }

        return view('log_tarifacaos.edit')->with('logTarifacao', $logTarifacao);
    }

    /**
     * Update the specified LogTarifacao in storage.
     *
     * @param int $id
     * @param UpdateLogTarifacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogTarifacaoRequest $request)
    {
        $logTarifacao = $this->logTarifacaoRepository->find($id);

        if (empty($logTarifacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logTarifacaos.singular')]));

            return redirect(route('logTarifacaos.index'));
        }

        $logTarifacao = $this->logTarifacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/logTarifacaos.singular')]));

        return redirect(route('logTarifacaos.index'));
    }

    /**
     * Remove the specified LogTarifacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logTarifacao = $this->logTarifacaoRepository->find($id);

        if (empty($logTarifacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logTarifacaos.singular')]));

            return redirect(route('logTarifacaos.index'));
        }

        $this->logTarifacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/logTarifacaos.singular')]));

        return redirect(route('logTarifacaos.index'));
    }
}
