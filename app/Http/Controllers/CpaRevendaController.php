<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCpaRevendaRequest;
use App\Http\Requests\UpdateCpaRevendaRequest;
use App\Repositories\CpaRevendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CpaRevendaController extends AppBaseController
{
    /** @var  CpaRevendaRepository */
    private $cpaRevendaRepository;

    public function __construct(CpaRevendaRepository $cpaRevendaRepo)
    {
        $this->cpaRevendaRepository = $cpaRevendaRepo;
    }

    /**
     * Display a listing of the CpaRevenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cpaRevendas = $this->cpaRevendaRepository->all();

        return view('cpa_revendas.index')
            ->with('cpaRevendas', $cpaRevendas);
    }

    /**
     * Show the form for creating a new CpaRevenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpa_revendas.create');
    }

    /**
     * Store a newly created CpaRevenda in storage.
     *
     * @param CreateCpaRevendaRequest $request
     *
     * @return Response
     */
    public function store(CreateCpaRevendaRequest $request)
    {
        $input = $request->all();

        $cpaRevenda = $this->cpaRevendaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cpaRevendas.singular')]));

        return redirect(route('cpaRevendas.index'));
    }

    /**
     * Display the specified CpaRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cpaRevenda = $this->cpaRevendaRepository->find($id);

        if (empty($cpaRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaRevendas.singular')]));

            return redirect(route('cpaRevendas.index'));
        }

        return view('cpa_revendas.show')->with('cpaRevenda', $cpaRevenda);
    }

    /**
     * Show the form for editing the specified CpaRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cpaRevenda = $this->cpaRevendaRepository->find($id);

        if (empty($cpaRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaRevendas.singular')]));

            return redirect(route('cpaRevendas.index'));
        }

        return view('cpa_revendas.edit')->with('cpaRevenda', $cpaRevenda);
    }

    /**
     * Update the specified CpaRevenda in storage.
     *
     * @param int $id
     * @param UpdateCpaRevendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCpaRevendaRequest $request)
    {
        $cpaRevenda = $this->cpaRevendaRepository->find($id);

        if (empty($cpaRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaRevendas.singular')]));

            return redirect(route('cpaRevendas.index'));
        }

        $cpaRevenda = $this->cpaRevendaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cpaRevendas.singular')]));

        return redirect(route('cpaRevendas.index'));
    }

    /**
     * Remove the specified CpaRevenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cpaRevenda = $this->cpaRevendaRepository->find($id);

        if (empty($cpaRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaRevendas.singular')]));

            return redirect(route('cpaRevendas.index'));
        }

        $this->cpaRevendaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cpaRevendas.singular')]));

        return redirect(route('cpaRevendas.index'));
    }
}
