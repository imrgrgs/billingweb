<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrecMasterRequest;
use App\Http\Requests\UpdateCrecMasterRequest;
use App\Repositories\CrecMasterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CrecMasterController extends AppBaseController
{
    /** @var  CrecMasterRepository */
    private $crecMasterRepository;

    public function __construct(CrecMasterRepository $crecMasterRepo)
    {
        $this->crecMasterRepository = $crecMasterRepo;
    }

    /**
     * Display a listing of the CrecMaster.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $crecMasters = $this->crecMasterRepository->all();

        return view('crec_masters.index')
            ->with('crecMasters', $crecMasters);
    }

    /**
     * Show the form for creating a new CrecMaster.
     *
     * @return Response
     */
    public function create()
    {
        return view('crec_masters.create');
    }

    /**
     * Store a newly created CrecMaster in storage.
     *
     * @param CreateCrecMasterRequest $request
     *
     * @return Response
     */
    public function store(CreateCrecMasterRequest $request)
    {
        $input = $request->all();

        $crecMaster = $this->crecMasterRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/crecMasters.singular')]));

        return redirect(route('crecMasters.index'));
    }

    /**
     * Display the specified CrecMaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crecMaster = $this->crecMasterRepository->find($id);

        if (empty($crecMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecMasters.singular')]));

            return redirect(route('crecMasters.index'));
        }

        return view('crec_masters.show')->with('crecMaster', $crecMaster);
    }

    /**
     * Show the form for editing the specified CrecMaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crecMaster = $this->crecMasterRepository->find($id);

        if (empty($crecMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecMasters.singular')]));

            return redirect(route('crecMasters.index'));
        }

        return view('crec_masters.edit')->with('crecMaster', $crecMaster);
    }

    /**
     * Update the specified CrecMaster in storage.
     *
     * @param int $id
     * @param UpdateCrecMasterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrecMasterRequest $request)
    {
        $crecMaster = $this->crecMasterRepository->find($id);

        if (empty($crecMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecMasters.singular')]));

            return redirect(route('crecMasters.index'));
        }

        $crecMaster = $this->crecMasterRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/crecMasters.singular')]));

        return redirect(route('crecMasters.index'));
    }

    /**
     * Remove the specified CrecMaster from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crecMaster = $this->crecMasterRepository->find($id);

        if (empty($crecMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crecMasters.singular')]));

            return redirect(route('crecMasters.index'));
        }

        $this->crecMasterRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/crecMasters.singular')]));

        return redirect(route('crecMasters.index'));
    }
}
