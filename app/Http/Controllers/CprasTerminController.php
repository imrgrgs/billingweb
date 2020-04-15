<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCprasTerminRequest;
use App\Http\Requests\UpdateCprasTerminRequest;
use App\Repositories\CprasTerminRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CprasTerminController extends AppBaseController
{
    /** @var  CprasTerminRepository */
    private $cprasTerminRepository;

    public function __construct(CprasTerminRepository $cprasTerminRepo)
    {
        $this->cprasTerminRepository = $cprasTerminRepo;
    }

    /**
     * Display a listing of the CprasTermin.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cprasTermins = $this->cprasTerminRepository->all();

        return view('cpras_termins.index')
            ->with('cprasTermins', $cprasTermins);
    }

    /**
     * Show the form for creating a new CprasTermin.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpras_termins.create');
    }

    /**
     * Store a newly created CprasTermin in storage.
     *
     * @param CreateCprasTerminRequest $request
     *
     * @return Response
     */
    public function store(CreateCprasTerminRequest $request)
    {
        $input = $request->all();

        $cprasTermin = $this->cprasTerminRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cprasTermins.singular')]));

        return redirect(route('cprasTermins.index'));
    }

    /**
     * Display the specified CprasTermin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cprasTermin = $this->cprasTerminRepository->find($id);

        if (empty($cprasTermin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cprasTermins.singular')]));

            return redirect(route('cprasTermins.index'));
        }

        return view('cpras_termins.show')->with('cprasTermin', $cprasTermin);
    }

    /**
     * Show the form for editing the specified CprasTermin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cprasTermin = $this->cprasTerminRepository->find($id);

        if (empty($cprasTermin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cprasTermins.singular')]));

            return redirect(route('cprasTermins.index'));
        }

        return view('cpras_termins.edit')->with('cprasTermin', $cprasTermin);
    }

    /**
     * Update the specified CprasTermin in storage.
     *
     * @param int $id
     * @param UpdateCprasTerminRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCprasTerminRequest $request)
    {
        $cprasTermin = $this->cprasTerminRepository->find($id);

        if (empty($cprasTermin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cprasTermins.singular')]));

            return redirect(route('cprasTermins.index'));
        }

        $cprasTermin = $this->cprasTerminRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cprasTermins.singular')]));

        return redirect(route('cprasTermins.index'));
    }

    /**
     * Remove the specified CprasTermin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cprasTermin = $this->cprasTerminRepository->find($id);

        if (empty($cprasTermin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cprasTermins.singular')]));

            return redirect(route('cprasTermins.index'));
        }

        $this->cprasTerminRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cprasTermins.singular')]));

        return redirect(route('cprasTermins.index'));
    }
}
