<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoRequest;
use App\Http\Requests\UpdateGrupoRequest;
use App\Repositories\GrupoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoController extends AppBaseController
{
    /** @var  GrupoRepository */
    private $grupoRepository;

    public function __construct(GrupoRepository $grupoRepo)
    {
        $this->grupoRepository = $grupoRepo;
    }

    /**
     * Display a listing of the Grupo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupos = $this->grupoRepository->all();

        return view('grupos.index')
            ->with('grupos', $grupos);
    }

    /**
     * Show the form for creating a new Grupo.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created Grupo in storage.
     *
     * @param CreateGrupoRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoRequest $request)
    {
        $input = $request->all();

        $grupo = $this->grupoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupos.singular')]));

        return redirect(route('grupos.index'));
    }

    /**
     * Display the specified Grupo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupo = $this->grupoRepository->find($id);

        if (empty($grupo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupos.singular')]));

            return redirect(route('grupos.index'));
        }

        return view('grupos.show')->with('grupo', $grupo);
    }

    /**
     * Show the form for editing the specified Grupo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupo = $this->grupoRepository->find($id);

        if (empty($grupo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupos.singular')]));

            return redirect(route('grupos.index'));
        }

        return view('grupos.edit')->with('grupo', $grupo);
    }

    /**
     * Update the specified Grupo in storage.
     *
     * @param int $id
     * @param UpdateGrupoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoRequest $request)
    {
        $grupo = $this->grupoRepository->find($id);

        if (empty($grupo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupos.singular')]));

            return redirect(route('grupos.index'));
        }

        $grupo = $this->grupoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupos.singular')]));

        return redirect(route('grupos.index'));
    }

    /**
     * Remove the specified Grupo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupo = $this->grupoRepository->find($id);

        if (empty($grupo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupos.singular')]));

            return redirect(route('grupos.index'));
        }

        $this->grupoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupos.singular')]));

        return redirect(route('grupos.index'));
    }
}
