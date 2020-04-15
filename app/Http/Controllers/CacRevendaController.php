<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCacRevendaRequest;
use App\Http\Requests\UpdateCacRevendaRequest;
use App\Repositories\CacRevendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CacRevendaController extends AppBaseController
{
    /** @var  CacRevendaRepository */
    private $cacRevendaRepository;

    public function __construct(CacRevendaRepository $cacRevendaRepo)
    {
        $this->cacRevendaRepository = $cacRevendaRepo;
    }

    /**
     * Display a listing of the CacRevenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cacRevendas = $this->cacRevendaRepository->all();

        return view('cac_revendas.index')
            ->with('cacRevendas', $cacRevendas);
    }

    /**
     * Show the form for creating a new CacRevenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('cac_revendas.create');
    }

    /**
     * Store a newly created CacRevenda in storage.
     *
     * @param CreateCacRevendaRequest $request
     *
     * @return Response
     */
    public function store(CreateCacRevendaRequest $request)
    {
        $input = $request->all();

        $cacRevenda = $this->cacRevendaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cacRevendas.singular')]));

        return redirect(route('cacRevendas.index'));
    }

    /**
     * Display the specified CacRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cacRevenda = $this->cacRevendaRepository->find($id);

        if (empty($cacRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacRevendas.singular')]));

            return redirect(route('cacRevendas.index'));
        }

        return view('cac_revendas.show')->with('cacRevenda', $cacRevenda);
    }

    /**
     * Show the form for editing the specified CacRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cacRevenda = $this->cacRevendaRepository->find($id);

        if (empty($cacRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacRevendas.singular')]));

            return redirect(route('cacRevendas.index'));
        }

        return view('cac_revendas.edit')->with('cacRevenda', $cacRevenda);
    }

    /**
     * Update the specified CacRevenda in storage.
     *
     * @param int $id
     * @param UpdateCacRevendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCacRevendaRequest $request)
    {
        $cacRevenda = $this->cacRevendaRepository->find($id);

        if (empty($cacRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacRevendas.singular')]));

            return redirect(route('cacRevendas.index'));
        }

        $cacRevenda = $this->cacRevendaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cacRevendas.singular')]));

        return redirect(route('cacRevendas.index'));
    }

    /**
     * Remove the specified CacRevenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cacRevenda = $this->cacRevendaRepository->find($id);

        if (empty($cacRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacRevendas.singular')]));

            return redirect(route('cacRevendas.index'));
        }

        $this->cacRevendaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cacRevendas.singular')]));

        return redirect(route('cacRevendas.index'));
    }
}
