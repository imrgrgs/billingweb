<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelacaoRequest;
use App\Http\Requests\UpdateRelacaoRequest;
use App\Repositories\RelacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RelacaoController extends AppBaseController
{
    /** @var  RelacaoRepository */
    private $relacaoRepository;

    public function __construct(RelacaoRepository $relacaoRepo)
    {
        $this->relacaoRepository = $relacaoRepo;
    }

    /**
     * Display a listing of the Relacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $relacaos = $this->relacaoRepository->all();

        return view('relacaos.index')
            ->with('relacaos', $relacaos);
    }

    /**
     * Show the form for creating a new Relacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('relacaos.create');
    }

    /**
     * Store a newly created Relacao in storage.
     *
     * @param CreateRelacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateRelacaoRequest $request)
    {
        $input = $request->all();

        $relacao = $this->relacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/relacaos.singular')]));

        return redirect(route('relacaos.index'));
    }

    /**
     * Display the specified Relacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relacao = $this->relacaoRepository->find($id);

        if (empty($relacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/relacaos.singular')]));

            return redirect(route('relacaos.index'));
        }

        return view('relacaos.show')->with('relacao', $relacao);
    }

    /**
     * Show the form for editing the specified Relacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relacao = $this->relacaoRepository->find($id);

        if (empty($relacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/relacaos.singular')]));

            return redirect(route('relacaos.index'));
        }

        return view('relacaos.edit')->with('relacao', $relacao);
    }

    /**
     * Update the specified Relacao in storage.
     *
     * @param int $id
     * @param UpdateRelacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelacaoRequest $request)
    {
        $relacao = $this->relacaoRepository->find($id);

        if (empty($relacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/relacaos.singular')]));

            return redirect(route('relacaos.index'));
        }

        $relacao = $this->relacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/relacaos.singular')]));

        return redirect(route('relacaos.index'));
    }

    /**
     * Remove the specified Relacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relacao = $this->relacaoRepository->find($id);

        if (empty($relacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/relacaos.singular')]));

            return redirect(route('relacaos.index'));
        }

        $this->relacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/relacaos.singular')]));

        return redirect(route('relacaos.index'));
    }
}
