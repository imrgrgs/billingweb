<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTpMenuRequest;
use App\Http\Requests\UpdateTpMenuRequest;
use App\Repositories\TpMenuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TpMenuController extends AppBaseController
{
    /** @var  TpMenuRepository */
    private $tpMenuRepository;

    public function __construct(TpMenuRepository $tpMenuRepo)
    {
        $this->tpMenuRepository = $tpMenuRepo;
    }

    /**
     * Display a listing of the TpMenu.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tpMenus = $this->tpMenuRepository->all();

        return view('tp_menus.index')
            ->with('tpMenus', $tpMenus);
    }

    /**
     * Show the form for creating a new TpMenu.
     *
     * @return Response
     */
    public function create()
    {
        return view('tp_menus.create');
    }

    /**
     * Store a newly created TpMenu in storage.
     *
     * @param CreateTpMenuRequest $request
     *
     * @return Response
     */
    public function store(CreateTpMenuRequest $request)
    {
        $input = $request->all();

        $tpMenu = $this->tpMenuRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tpMenus.singular')]));

        return redirect(route('tpMenus.index'));
    }

    /**
     * Display the specified TpMenu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tpMenu = $this->tpMenuRepository->find($id);

        if (empty($tpMenu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tpMenus.singular')]));

            return redirect(route('tpMenus.index'));
        }

        return view('tp_menus.show')->with('tpMenu', $tpMenu);
    }

    /**
     * Show the form for editing the specified TpMenu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tpMenu = $this->tpMenuRepository->find($id);

        if (empty($tpMenu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tpMenus.singular')]));

            return redirect(route('tpMenus.index'));
        }

        return view('tp_menus.edit')->with('tpMenu', $tpMenu);
    }

    /**
     * Update the specified TpMenu in storage.
     *
     * @param int $id
     * @param UpdateTpMenuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTpMenuRequest $request)
    {
        $tpMenu = $this->tpMenuRepository->find($id);

        if (empty($tpMenu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tpMenus.singular')]));

            return redirect(route('tpMenus.index'));
        }

        $tpMenu = $this->tpMenuRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tpMenus.singular')]));

        return redirect(route('tpMenus.index'));
    }

    /**
     * Remove the specified TpMenu from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tpMenu = $this->tpMenuRepository->find($id);

        if (empty($tpMenu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tpMenus.singular')]));

            return redirect(route('tpMenus.index'));
        }

        $this->tpMenuRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tpMenus.singular')]));

        return redirect(route('tpMenus.index'));
    }
}
