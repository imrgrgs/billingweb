<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoUraDesvioRequest;
use App\Http\Requests\UpdateGrupoUraDesvioRequest;
use App\Repositories\GrupoUraDesvioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoUraDesvioController extends AppBaseController
{
    /** @var  GrupoUraDesvioRepository */
    private $grupoUraDesvioRepository;

    public function __construct(GrupoUraDesvioRepository $grupoUraDesvioRepo)
    {
        $this->grupoUraDesvioRepository = $grupoUraDesvioRepo;
    }

    /**
     * Display a listing of the GrupoUraDesvio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupoUraDesvios = $this->grupoUraDesvioRepository->all();

        return view('grupo_ura_desvios.index')
            ->with('grupoUraDesvios', $grupoUraDesvios);
    }

    /**
     * Show the form for creating a new GrupoUraDesvio.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_ura_desvios.create');
    }

    /**
     * Store a newly created GrupoUraDesvio in storage.
     *
     * @param CreateGrupoUraDesvioRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoUraDesvioRequest $request)
    {
        $input = $request->all();

        $grupoUraDesvio = $this->grupoUraDesvioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupoUraDesvios.singular')]));

        return redirect(route('grupoUraDesvios.index'));
    }

    /**
     * Display the specified GrupoUraDesvio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoUraDesvio = $this->grupoUraDesvioRepository->find($id);

        if (empty($grupoUraDesvio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUraDesvios.singular')]));

            return redirect(route('grupoUraDesvios.index'));
        }

        return view('grupo_ura_desvios.show')->with('grupoUraDesvio', $grupoUraDesvio);
    }

    /**
     * Show the form for editing the specified GrupoUraDesvio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoUraDesvio = $this->grupoUraDesvioRepository->find($id);

        if (empty($grupoUraDesvio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUraDesvios.singular')]));

            return redirect(route('grupoUraDesvios.index'));
        }

        return view('grupo_ura_desvios.edit')->with('grupoUraDesvio', $grupoUraDesvio);
    }

    /**
     * Update the specified GrupoUraDesvio in storage.
     *
     * @param int $id
     * @param UpdateGrupoUraDesvioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoUraDesvioRequest $request)
    {
        $grupoUraDesvio = $this->grupoUraDesvioRepository->find($id);

        if (empty($grupoUraDesvio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUraDesvios.singular')]));

            return redirect(route('grupoUraDesvios.index'));
        }

        $grupoUraDesvio = $this->grupoUraDesvioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupoUraDesvios.singular')]));

        return redirect(route('grupoUraDesvios.index'));
    }

    /**
     * Remove the specified GrupoUraDesvio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoUraDesvio = $this->grupoUraDesvioRepository->find($id);

        if (empty($grupoUraDesvio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUraDesvios.singular')]));

            return redirect(route('grupoUraDesvios.index'));
        }

        $this->grupoUraDesvioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupoUraDesvios.singular')]));

        return redirect(route('grupoUraDesvios.index'));
    }
}
