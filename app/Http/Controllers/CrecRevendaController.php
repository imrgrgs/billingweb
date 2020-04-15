<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrecRevendaRequest;
use App\Http\Requests\UpdateCrecRevendaRequest;
use App\Repositories\CrecRevendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CrecRevendaController extends AppBaseController
{
    /** @var  CrecRevendaRepository */
    private $crecRevendaRepository;

    public function __construct(CrecRevendaRepository $crecRevendaRepo)
    {
        $this->crecRevendaRepository = $crecRevendaRepo;
    }

    /**
     * Display a listing of the CrecRevenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $crecRevendas = $this->crecRevendaRepository->all();

        return view('crec_revendas.index')
            ->with('crecRevendas', $crecRevendas);
    }

    /**
     * Show the form for creating a new CrecRevenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('crec_revendas.create');
    }

    /**
     * Store a newly created CrecRevenda in storage.
     *
     * @param CreateCrecRevendaRequest $request
     *
     * @return Response
     */
    public function store(CreateCrecRevendaRequest $request)
    {
        $input = $request->all();

        $crecRevenda = $this->crecRevendaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/crecRevendas.singular')]));

        return redirect(route('crecRevendas.index'));
    }

    /**
     * Display the specified CrecRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crecRevenda = $this->crecRevendaRepository->find($id);

        if (empty($crecRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecRevendas.singular')]));

            return redirect(route('crecRevendas.index'));
        }

        return view('crec_revendas.show')->with('crecRevenda', $crecRevenda);
    }

    /**
     * Show the form for editing the specified CrecRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crecRevenda = $this->crecRevendaRepository->find($id);

        if (empty($crecRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecRevendas.singular')]));

            return redirect(route('crecRevendas.index'));
        }

        return view('crec_revendas.edit')->with('crecRevenda', $crecRevenda);
    }

    /**
     * Update the specified CrecRevenda in storage.
     *
     * @param int $id
     * @param UpdateCrecRevendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrecRevendaRequest $request)
    {
        $crecRevenda = $this->crecRevendaRepository->find($id);

        if (empty($crecRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecRevendas.singular')]));

            return redirect(route('crecRevendas.index'));
        }

        $crecRevenda = $this->crecRevendaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/crecRevendas.singular')]));

        return redirect(route('crecRevendas.index'));
    }

    /**
     * Remove the specified CrecRevenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crecRevenda = $this->crecRevendaRepository->find($id);

        if (empty($crecRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecRevendas.singular')]));

            return redirect(route('crecRevendas.index'));
        }

        $this->crecRevendaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/crecRevendas.singular')]));

        return redirect(route('crecRevendas.index'));
    }
}
