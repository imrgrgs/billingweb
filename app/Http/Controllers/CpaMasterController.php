<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCpaMasterRequest;
use App\Http\Requests\UpdateCpaMasterRequest;
use App\Repositories\CpaMasterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CpaMasterController extends AppBaseController
{
    /** @var  CpaMasterRepository */
    private $cpaMasterRepository;

    public function __construct(CpaMasterRepository $cpaMasterRepo)
    {
        $this->cpaMasterRepository = $cpaMasterRepo;
    }

    /**
     * Display a listing of the CpaMaster.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cpaMasters = $this->cpaMasterRepository->all();

        return view('cpa_masters.index')
            ->with('cpaMasters', $cpaMasters);
    }

    /**
     * Show the form for creating a new CpaMaster.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpa_masters.create');
    }

    /**
     * Store a newly created CpaMaster in storage.
     *
     * @param CreateCpaMasterRequest $request
     *
     * @return Response
     */
    public function store(CreateCpaMasterRequest $request)
    {
        $input = $request->all();

        $cpaMaster = $this->cpaMasterRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cpaMasters.singular')]));

        return redirect(route('cpaMasters.index'));
    }

    /**
     * Display the specified CpaMaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cpaMaster = $this->cpaMasterRepository->find($id);

        if (empty($cpaMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaMasters.singular')]));

            return redirect(route('cpaMasters.index'));
        }

        return view('cpa_masters.show')->with('cpaMaster', $cpaMaster);
    }

    /**
     * Show the form for editing the specified CpaMaster.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cpaMaster = $this->cpaMasterRepository->find($id);

        if (empty($cpaMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaMasters.singular')]));

            return redirect(route('cpaMasters.index'));
        }

        return view('cpa_masters.edit')->with('cpaMaster', $cpaMaster);
    }

    /**
     * Update the specified CpaMaster in storage.
     *
     * @param int $id
     * @param UpdateCpaMasterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCpaMasterRequest $request)
    {
        $cpaMaster = $this->cpaMasterRepository->find($id);

        if (empty($cpaMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaMasters.singular')]));

            return redirect(route('cpaMasters.index'));
        }

        $cpaMaster = $this->cpaMasterRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cpaMasters.singular')]));

        return redirect(route('cpaMasters.index'));
    }

    /**
     * Remove the specified CpaMaster from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cpaMaster = $this->cpaMasterRepository->find($id);

        if (empty($cpaMaster)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cpaMasters.singular')]));

            return redirect(route('cpaMasters.index'));
        }

        $this->cpaMasterRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cpaMasters.singular')]));

        return redirect(route('cpaMasters.index'));
    }
}
