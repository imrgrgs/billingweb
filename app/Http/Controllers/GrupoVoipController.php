<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoVoipRequest;
use App\Http\Requests\UpdateGrupoVoipRequest;
use App\Repositories\GrupoVoipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoVoipController extends AppBaseController
{
    /** @var  GrupoVoipRepository */
    private $grupoVoipRepository;

    public function __construct(GrupoVoipRepository $grupoVoipRepo)
    {
        $this->grupoVoipRepository = $grupoVoipRepo;
    }

    /**
     * Display a listing of the GrupoVoip.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupoVoips = $this->grupoVoipRepository->all();

        return view('grupo_voips.index')
            ->with('grupoVoips', $grupoVoips);
    }

    /**
     * Show the form for creating a new GrupoVoip.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_voips.create');
    }

    /**
     * Store a newly created GrupoVoip in storage.
     *
     * @param CreateGrupoVoipRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoVoipRequest $request)
    {
        $input = $request->all();

        $grupoVoip = $this->grupoVoipRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupoVoips.singular')]));

        return redirect(route('grupoVoips.index'));
    }

    /**
     * Display the specified GrupoVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoVoip = $this->grupoVoipRepository->find($id);

        if (empty($grupoVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoips.singular')]));

            return redirect(route('grupoVoips.index'));
        }

        return view('grupo_voips.show')->with('grupoVoip', $grupoVoip);
    }

    /**
     * Show the form for editing the specified GrupoVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoVoip = $this->grupoVoipRepository->find($id);

        if (empty($grupoVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoips.singular')]));

            return redirect(route('grupoVoips.index'));
        }

        return view('grupo_voips.edit')->with('grupoVoip', $grupoVoip);
    }

    /**
     * Update the specified GrupoVoip in storage.
     *
     * @param int $id
     * @param UpdateGrupoVoipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoVoipRequest $request)
    {
        $grupoVoip = $this->grupoVoipRepository->find($id);

        if (empty($grupoVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoips.singular')]));

            return redirect(route('grupoVoips.index'));
        }

        $grupoVoip = $this->grupoVoipRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupoVoips.singular')]));

        return redirect(route('grupoVoips.index'));
    }

    /**
     * Remove the specified GrupoVoip from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoVoip = $this->grupoVoipRepository->find($id);

        if (empty($grupoVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoips.singular')]));

            return redirect(route('grupoVoips.index'));
        }

        $this->grupoVoipRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupoVoips.singular')]));

        return redirect(route('grupoVoips.index'));
    }
}
