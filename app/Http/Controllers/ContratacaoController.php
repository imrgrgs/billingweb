<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratacaoRequest;
use App\Http\Requests\UpdateContratacaoRequest;
use App\Repositories\ContratacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContratacaoController extends AppBaseController
{
    /** @var  ContratacaoRepository */
    private $contratacaoRepository;

    public function __construct(ContratacaoRepository $contratacaoRepo)
    {
        $this->contratacaoRepository = $contratacaoRepo;
    }

    /**
     * Display a listing of the Contratacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contratacaos = $this->contratacaoRepository->all();

        return view('contratacaos.index')
            ->with('contratacaos', $contratacaos);
    }

    /**
     * Show the form for creating a new Contratacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratacaos.create');
    }

    /**
     * Store a newly created Contratacao in storage.
     *
     * @param CreateContratacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateContratacaoRequest $request)
    {
        $input = $request->all();

        $contratacao = $this->contratacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contratacaos.singular')]));

        return redirect(route('contratacaos.index'));
    }

    /**
     * Display the specified Contratacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratacao = $this->contratacaoRepository->find($id);

        if (empty($contratacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratacaos.singular')]));

            return redirect(route('contratacaos.index'));
        }

        return view('contratacaos.show')->with('contratacao', $contratacao);
    }

    /**
     * Show the form for editing the specified Contratacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratacao = $this->contratacaoRepository->find($id);

        if (empty($contratacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratacaos.singular')]));

            return redirect(route('contratacaos.index'));
        }

        return view('contratacaos.edit')->with('contratacao', $contratacao);
    }

    /**
     * Update the specified Contratacao in storage.
     *
     * @param int $id
     * @param UpdateContratacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratacaoRequest $request)
    {
        $contratacao = $this->contratacaoRepository->find($id);

        if (empty($contratacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratacaos.singular')]));

            return redirect(route('contratacaos.index'));
        }

        $contratacao = $this->contratacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contratacaos.singular')]));

        return redirect(route('contratacaos.index'));
    }

    /**
     * Remove the specified Contratacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratacao = $this->contratacaoRepository->find($id);

        if (empty($contratacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratacaos.singular')]));

            return redirect(route('contratacaos.index'));
        }

        $this->contratacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contratacaos.singular')]));

        return redirect(route('contratacaos.index'));
    }
}
