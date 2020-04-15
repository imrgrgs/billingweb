<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabRevendaRequest;
use App\Http\Requests\UpdateTabRevendaRequest;
use App\Repositories\TabRevendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TabRevendaController extends AppBaseController
{
    /** @var  TabRevendaRepository */
    private $tabRevendaRepository;

    public function __construct(TabRevendaRepository $tabRevendaRepo)
    {
        $this->tabRevendaRepository = $tabRevendaRepo;
    }

    /**
     * Display a listing of the TabRevenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tabRevendas = $this->tabRevendaRepository->all();

        return view('tab_revendas.index')
            ->with('tabRevendas', $tabRevendas);
    }

    /**
     * Show the form for creating a new TabRevenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('tab_revendas.create');
    }

    /**
     * Store a newly created TabRevenda in storage.
     *
     * @param CreateTabRevendaRequest $request
     *
     * @return Response
     */
    public function store(CreateTabRevendaRequest $request)
    {
        $input = $request->all();

        $tabRevenda = $this->tabRevendaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tabRevendas.singular')]));

        return redirect(route('tabRevendas.index'));
    }

    /**
     * Display the specified TabRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabRevenda = $this->tabRevendaRepository->find($id);

        if (empty($tabRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabRevendas.singular')]));

            return redirect(route('tabRevendas.index'));
        }

        return view('tab_revendas.show')->with('tabRevenda', $tabRevenda);
    }

    /**
     * Show the form for editing the specified TabRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabRevenda = $this->tabRevendaRepository->find($id);

        if (empty($tabRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabRevendas.singular')]));

            return redirect(route('tabRevendas.index'));
        }

        return view('tab_revendas.edit')->with('tabRevenda', $tabRevenda);
    }

    /**
     * Update the specified TabRevenda in storage.
     *
     * @param int $id
     * @param UpdateTabRevendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTabRevendaRequest $request)
    {
        $tabRevenda = $this->tabRevendaRepository->find($id);

        if (empty($tabRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabRevendas.singular')]));

            return redirect(route('tabRevendas.index'));
        }

        $tabRevenda = $this->tabRevendaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tabRevendas.singular')]));

        return redirect(route('tabRevendas.index'));
    }

    /**
     * Remove the specified TabRevenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabRevenda = $this->tabRevendaRepository->find($id);

        if (empty($tabRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabRevendas.singular')]));

            return redirect(route('tabRevendas.index'));
        }

        $this->tabRevendaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tabRevendas.singular')]));

        return redirect(route('tabRevendas.index'));
    }
}
