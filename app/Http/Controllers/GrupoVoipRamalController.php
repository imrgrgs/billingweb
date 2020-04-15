<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoVoipRamalRequest;
use App\Http\Requests\UpdateGrupoVoipRamalRequest;
use App\Repositories\GrupoVoipRamalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoVoipRamalController extends AppBaseController
{
    /** @var  GrupoVoipRamalRepository */
    private $grupoVoipRamalRepository;

    public function __construct(GrupoVoipRamalRepository $grupoVoipRamalRepo)
    {
        $this->grupoVoipRamalRepository = $grupoVoipRamalRepo;
    }

    /**
     * Display a listing of the GrupoVoipRamal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupoVoipRamals = $this->grupoVoipRamalRepository->all();

        return view('grupo_voip_ramals.index')
            ->with('grupoVoipRamals', $grupoVoipRamals);
    }

    /**
     * Show the form for creating a new GrupoVoipRamal.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_voip_ramals.create');
    }

    /**
     * Store a newly created GrupoVoipRamal in storage.
     *
     * @param CreateGrupoVoipRamalRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoVoipRamalRequest $request)
    {
        $input = $request->all();

        $grupoVoipRamal = $this->grupoVoipRamalRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupoVoipRamals.singular')]));

        return redirect(route('grupoVoipRamals.index'));
    }

    /**
     * Display the specified GrupoVoipRamal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoVoipRamal = $this->grupoVoipRamalRepository->find($id);

        if (empty($grupoVoipRamal)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoipRamals.singular')]));

            return redirect(route('grupoVoipRamals.index'));
        }

        return view('grupo_voip_ramals.show')->with('grupoVoipRamal', $grupoVoipRamal);
    }

    /**
     * Show the form for editing the specified GrupoVoipRamal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoVoipRamal = $this->grupoVoipRamalRepository->find($id);

        if (empty($grupoVoipRamal)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoipRamals.singular')]));

            return redirect(route('grupoVoipRamals.index'));
        }

        return view('grupo_voip_ramals.edit')->with('grupoVoipRamal', $grupoVoipRamal);
    }

    /**
     * Update the specified GrupoVoipRamal in storage.
     *
     * @param int $id
     * @param UpdateGrupoVoipRamalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoVoipRamalRequest $request)
    {
        $grupoVoipRamal = $this->grupoVoipRamalRepository->find($id);

        if (empty($grupoVoipRamal)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoipRamals.singular')]));

            return redirect(route('grupoVoipRamals.index'));
        }

        $grupoVoipRamal = $this->grupoVoipRamalRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupoVoipRamals.singular')]));

        return redirect(route('grupoVoipRamals.index'));
    }

    /**
     * Remove the specified GrupoVoipRamal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoVoipRamal = $this->grupoVoipRamalRepository->find($id);

        if (empty($grupoVoipRamal)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoVoipRamals.singular')]));

            return redirect(route('grupoVoipRamals.index'));
        }

        $this->grupoVoipRamalRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupoVoipRamals.singular')]));

        return redirect(route('grupoVoipRamals.index'));
    }
}
