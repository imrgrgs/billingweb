<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTerminacaoRequest;
use App\Http\Requests\UpdateTerminacaoRequest;
use App\Repositories\TerminacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TerminacaoController extends AppBaseController
{
    /** @var  TerminacaoRepository */
    private $terminacaoRepository;

    public function __construct(TerminacaoRepository $terminacaoRepo)
    {
        $this->terminacaoRepository = $terminacaoRepo;
    }

    /**
     * Display a listing of the Terminacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $terminacaos = $this->terminacaoRepository->all();

        return view('terminacaos.index')
            ->with('terminacaos', $terminacaos);
    }

    /**
     * Show the form for creating a new Terminacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('terminacaos.create');
    }

    /**
     * Store a newly created Terminacao in storage.
     *
     * @param CreateTerminacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateTerminacaoRequest $request)
    {
        $input = $request->all();

        $terminacao = $this->terminacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/terminacaos.singular')]));

        return redirect(route('terminacaos.index'));
    }

    /**
     * Display the specified Terminacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $terminacao = $this->terminacaoRepository->find($id);

        if (empty($terminacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/terminacaos.singular')]));

            return redirect(route('terminacaos.index'));
        }

        return view('terminacaos.show')->with('terminacao', $terminacao);
    }

    /**
     * Show the form for editing the specified Terminacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $terminacao = $this->terminacaoRepository->find($id);

        if (empty($terminacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/terminacaos.singular')]));

            return redirect(route('terminacaos.index'));
        }

        return view('terminacaos.edit')->with('terminacao', $terminacao);
    }

    /**
     * Update the specified Terminacao in storage.
     *
     * @param int $id
     * @param UpdateTerminacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTerminacaoRequest $request)
    {
        $terminacao = $this->terminacaoRepository->find($id);

        if (empty($terminacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/terminacaos.singular')]));

            return redirect(route('terminacaos.index'));
        }

        $terminacao = $this->terminacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/terminacaos.singular')]));

        return redirect(route('terminacaos.index'));
    }

    /**
     * Remove the specified Terminacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $terminacao = $this->terminacaoRepository->find($id);

        if (empty($terminacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/terminacaos.singular')]));

            return redirect(route('terminacaos.index'));
        }

        $this->terminacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/terminacaos.singular')]));

        return redirect(route('terminacaos.index'));
    }
}
