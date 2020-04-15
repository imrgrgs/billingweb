<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePosPagoRequest;
use App\Http\Requests\UpdatePosPagoRequest;
use App\Repositories\PosPagoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PosPagoController extends AppBaseController
{
    /** @var  PosPagoRepository */
    private $posPagoRepository;

    public function __construct(PosPagoRepository $posPagoRepo)
    {
        $this->posPagoRepository = $posPagoRepo;
    }

    /**
     * Display a listing of the PosPago.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posPagos = $this->posPagoRepository->all();

        return view('pos_pagos.index')
            ->with('posPagos', $posPagos);
    }

    /**
     * Show the form for creating a new PosPago.
     *
     * @return Response
     */
    public function create()
    {
        return view('pos_pagos.create');
    }

    /**
     * Store a newly created PosPago in storage.
     *
     * @param CreatePosPagoRequest $request
     *
     * @return Response
     */
    public function store(CreatePosPagoRequest $request)
    {
        $input = $request->all();

        $posPago = $this->posPagoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/posPagos.singular')]));

        return redirect(route('posPagos.index'));
    }

    /**
     * Display the specified PosPago.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $posPago = $this->posPagoRepository->find($id);

        if (empty($posPago)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posPagos.singular')]));

            return redirect(route('posPagos.index'));
        }

        return view('pos_pagos.show')->with('posPago', $posPago);
    }

    /**
     * Show the form for editing the specified PosPago.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $posPago = $this->posPagoRepository->find($id);

        if (empty($posPago)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posPagos.singular')]));

            return redirect(route('posPagos.index'));
        }

        return view('pos_pagos.edit')->with('posPago', $posPago);
    }

    /**
     * Update the specified PosPago in storage.
     *
     * @param int $id
     * @param UpdatePosPagoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePosPagoRequest $request)
    {
        $posPago = $this->posPagoRepository->find($id);

        if (empty($posPago)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posPagos.singular')]));

            return redirect(route('posPagos.index'));
        }

        $posPago = $this->posPagoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/posPagos.singular')]));

        return redirect(route('posPagos.index'));
    }

    /**
     * Remove the specified PosPago from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $posPago = $this->posPagoRepository->find($id);

        if (empty($posPago)) {
            Flash::error(__('messages.not_found', ['model' => __('models/posPagos.singular')]));

            return redirect(route('posPagos.index'));
        }

        $this->posPagoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/posPagos.singular')]));

        return redirect(route('posPagos.index'));
    }
}
