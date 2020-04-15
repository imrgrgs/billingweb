<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoUraRequest;
use App\Http\Requests\UpdateGrupoUraRequest;
use App\Repositories\GrupoUraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoUraController extends AppBaseController
{
    /** @var  GrupoUraRepository */
    private $grupoUraRepository;

    public function __construct(GrupoUraRepository $grupoUraRepo)
    {
        $this->grupoUraRepository = $grupoUraRepo;
    }

    /**
     * Display a listing of the GrupoUra.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupoUras = $this->grupoUraRepository->all();

        return view('grupo_uras.index')
            ->with('grupoUras', $grupoUras);
    }

    /**
     * Show the form for creating a new GrupoUra.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_uras.create');
    }

    /**
     * Store a newly created GrupoUra in storage.
     *
     * @param CreateGrupoUraRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoUraRequest $request)
    {
        $input = $request->all();

        $grupoUra = $this->grupoUraRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupoUras.singular')]));

        return redirect(route('grupoUras.index'));
    }

    /**
     * Display the specified GrupoUra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoUra = $this->grupoUraRepository->find($id);

        if (empty($grupoUra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUras.singular')]));

            return redirect(route('grupoUras.index'));
        }

        return view('grupo_uras.show')->with('grupoUra', $grupoUra);
    }

    /**
     * Show the form for editing the specified GrupoUra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoUra = $this->grupoUraRepository->find($id);

        if (empty($grupoUra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUras.singular')]));

            return redirect(route('grupoUras.index'));
        }

        return view('grupo_uras.edit')->with('grupoUra', $grupoUra);
    }

    /**
     * Update the specified GrupoUra in storage.
     *
     * @param int $id
     * @param UpdateGrupoUraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoUraRequest $request)
    {
        $grupoUra = $this->grupoUraRepository->find($id);

        if (empty($grupoUra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUras.singular')]));

            return redirect(route('grupoUras.index'));
        }

        $grupoUra = $this->grupoUraRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupoUras.singular')]));

        return redirect(route('grupoUras.index'));
    }

    /**
     * Remove the specified GrupoUra from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoUra = $this->grupoUraRepository->find($id);

        if (empty($grupoUra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoUras.singular')]));

            return redirect(route('grupoUras.index'));
        }

        $this->grupoUraRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupoUras.singular')]));

        return redirect(route('grupoUras.index'));
    }
}
