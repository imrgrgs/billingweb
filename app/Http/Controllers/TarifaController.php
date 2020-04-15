<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarifaRequest;
use App\Http\Requests\UpdateTarifaRequest;
use App\Repositories\TarifaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TarifaController extends AppBaseController
{
    /** @var  TarifaRepository */
    private $tarifaRepository;

    public function __construct(TarifaRepository $tarifaRepo)
    {
        $this->tarifaRepository = $tarifaRepo;
    }

    /**
     * Display a listing of the Tarifa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tarifas = $this->tarifaRepository->all();

        return view('tarifas.index')
            ->with('tarifas', $tarifas);
    }

    /**
     * Show the form for creating a new Tarifa.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarifas.create');
    }

    /**
     * Store a newly created Tarifa in storage.
     *
     * @param CreateTarifaRequest $request
     *
     * @return Response
     */
    public function store(CreateTarifaRequest $request)
    {
        $input = $request->all();

        $tarifa = $this->tarifaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }

    /**
     * Display the specified Tarifa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.show')->with('tarifa', $tarifa);
    }

    /**
     * Show the form for editing the specified Tarifa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.edit')->with('tarifa', $tarifa);
    }

    /**
     * Update the specified Tarifa in storage.
     *
     * @param int $id
     * @param UpdateTarifaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTarifaRequest $request)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        $tarifa = $this->tarifaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }

    /**
     * Remove the specified Tarifa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        $this->tarifaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }
}
