<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlanoRequest;
use App\Http\Requests\UpdatePlanoRequest;
use App\Repositories\PlanoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PlanoController extends AppBaseController
{
    /** @var  PlanoRepository */
    private $planoRepository;

    public function __construct(PlanoRepository $planoRepo)
    {
        $this->planoRepository = $planoRepo;
    }

    /**
     * Display a listing of the Plano.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $planos = $this->planoRepository->all();

        return view('planos.index')
            ->with('planos', $planos);
    }

    /**
     * Show the form for creating a new Plano.
     *
     * @return Response
     */
    public function create()
    {
        return view('planos.create');
    }

    /**
     * Store a newly created Plano in storage.
     *
     * @param CreatePlanoRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanoRequest $request)
    {
        $input = $request->all();

        $plano = $this->planoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/planos.singular')]));

        return redirect(route('planos.index'));
    }

    /**
     * Display the specified Plano.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $plano = $this->planoRepository->find($id);

        if (empty($plano)) {
            Flash::error(__('messages.not_found', ['model' => __('models/planos.singular')]));

            return redirect(route('planos.index'));
        }

        return view('planos.show')->with('plano', $plano);
    }

    /**
     * Show the form for editing the specified Plano.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $plano = $this->planoRepository->find($id);

        if (empty($plano)) {
            Flash::error(__('messages.not_found', ['model' => __('models/planos.singular')]));

            return redirect(route('planos.index'));
        }

        return view('planos.edit')->with('plano', $plano);
    }

    /**
     * Update the specified Plano in storage.
     *
     * @param int $id
     * @param UpdatePlanoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanoRequest $request)
    {
        $plano = $this->planoRepository->find($id);

        if (empty($plano)) {
            Flash::error(__('messages.not_found', ['model' => __('models/planos.singular')]));

            return redirect(route('planos.index'));
        }

        $plano = $this->planoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/planos.singular')]));

        return redirect(route('planos.index'));
    }

    /**
     * Remove the specified Plano from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $plano = $this->planoRepository->find($id);

        if (empty($plano)) {
            Flash::error(__('messages.not_found', ['model' => __('models/planos.singular')]));

            return redirect(route('planos.index'));
        }

        $this->planoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/planos.singular')]));

        return redirect(route('planos.index'));
    }
}
