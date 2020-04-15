<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLigacaoRequest;
use App\Http\Requests\UpdateLigacaoRequest;
use App\Repositories\LigacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LigacaoController extends AppBaseController
{
    /** @var  LigacaoRepository */
    private $ligacaoRepository;

    public function __construct(LigacaoRepository $ligacaoRepo)
    {
        $this->ligacaoRepository = $ligacaoRepo;
    }

    /**
     * Display a listing of the Ligacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ligacaos = $this->ligacaoRepository->all();

        return view('ligacaos.index')
            ->with('ligacaos', $ligacaos);
    }

    /**
     * Show the form for creating a new Ligacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('ligacaos.create');
    }

    /**
     * Store a newly created Ligacao in storage.
     *
     * @param CreateLigacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateLigacaoRequest $request)
    {
        $input = $request->all();

        $ligacao = $this->ligacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ligacaos.singular')]));

        return redirect(route('ligacaos.index'));
    }

    /**
     * Display the specified Ligacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ligacao = $this->ligacaoRepository->find($id);

        if (empty($ligacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligacaos.singular')]));

            return redirect(route('ligacaos.index'));
        }

        return view('ligacaos.show')->with('ligacao', $ligacao);
    }

    /**
     * Show the form for editing the specified Ligacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ligacao = $this->ligacaoRepository->find($id);

        if (empty($ligacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligacaos.singular')]));

            return redirect(route('ligacaos.index'));
        }

        return view('ligacaos.edit')->with('ligacao', $ligacao);
    }

    /**
     * Update the specified Ligacao in storage.
     *
     * @param int $id
     * @param UpdateLigacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLigacaoRequest $request)
    {
        $ligacao = $this->ligacaoRepository->find($id);

        if (empty($ligacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligacaos.singular')]));

            return redirect(route('ligacaos.index'));
        }

        $ligacao = $this->ligacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ligacaos.singular')]));

        return redirect(route('ligacaos.index'));
    }

    /**
     * Remove the specified Ligacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ligacao = $this->ligacaoRepository->find($id);

        if (empty($ligacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligacaos.singular')]));

            return redirect(route('ligacaos.index'));
        }

        $this->ligacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ligacaos.singular')]));

        return redirect(route('ligacaos.index'));
    }
}
