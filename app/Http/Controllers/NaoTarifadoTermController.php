<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNaoTarifadoTermRequest;
use App\Http\Requests\UpdateNaoTarifadoTermRequest;
use App\Repositories\NaoTarifadoTermRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NaoTarifadoTermController extends AppBaseController
{
    /** @var  NaoTarifadoTermRepository */
    private $naoTarifadoTermRepository;

    public function __construct(NaoTarifadoTermRepository $naoTarifadoTermRepo)
    {
        $this->naoTarifadoTermRepository = $naoTarifadoTermRepo;
    }

    /**
     * Display a listing of the NaoTarifadoTerm.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $naoTarifadoTerms = $this->naoTarifadoTermRepository->all();

        return view('nao_tarifado_terms.index')
            ->with('naoTarifadoTerms', $naoTarifadoTerms);
    }

    /**
     * Show the form for creating a new NaoTarifadoTerm.
     *
     * @return Response
     */
    public function create()
    {
        return view('nao_tarifado_terms.create');
    }

    /**
     * Store a newly created NaoTarifadoTerm in storage.
     *
     * @param CreateNaoTarifadoTermRequest $request
     *
     * @return Response
     */
    public function store(CreateNaoTarifadoTermRequest $request)
    {
        $input = $request->all();

        $naoTarifadoTerm = $this->naoTarifadoTermRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/naoTarifadoTerms.singular')]));

        return redirect(route('naoTarifadoTerms.index'));
    }

    /**
     * Display the specified NaoTarifadoTerm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $naoTarifadoTerm = $this->naoTarifadoTermRepository->find($id);

        if (empty($naoTarifadoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/naoTarifadoTerms.singular')]));

            return redirect(route('naoTarifadoTerms.index'));
        }

        return view('nao_tarifado_terms.show')->with('naoTarifadoTerm', $naoTarifadoTerm);
    }

    /**
     * Show the form for editing the specified NaoTarifadoTerm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $naoTarifadoTerm = $this->naoTarifadoTermRepository->find($id);

        if (empty($naoTarifadoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/naoTarifadoTerms.singular')]));

            return redirect(route('naoTarifadoTerms.index'));
        }

        return view('nao_tarifado_terms.edit')->with('naoTarifadoTerm', $naoTarifadoTerm);
    }

    /**
     * Update the specified NaoTarifadoTerm in storage.
     *
     * @param int $id
     * @param UpdateNaoTarifadoTermRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNaoTarifadoTermRequest $request)
    {
        $naoTarifadoTerm = $this->naoTarifadoTermRepository->find($id);

        if (empty($naoTarifadoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/naoTarifadoTerms.singular')]));

            return redirect(route('naoTarifadoTerms.index'));
        }

        $naoTarifadoTerm = $this->naoTarifadoTermRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/naoTarifadoTerms.singular')]));

        return redirect(route('naoTarifadoTerms.index'));
    }

    /**
     * Remove the specified NaoTarifadoTerm from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $naoTarifadoTerm = $this->naoTarifadoTermRepository->find($id);

        if (empty($naoTarifadoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/naoTarifadoTerms.singular')]));

            return redirect(route('naoTarifadoTerms.index'));
        }

        $this->naoTarifadoTermRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/naoTarifadoTerms.singular')]));

        return redirect(route('naoTarifadoTerms.index'));
    }
}
