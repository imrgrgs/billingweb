<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCabineRequest;
use App\Http\Requests\UpdateCabineRequest;
use App\Repositories\CabineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CabineController extends AppBaseController
{
    /** @var  CabineRepository */
    private $cabineRepository;

    public function __construct(CabineRepository $cabineRepo)
    {
        $this->cabineRepository = $cabineRepo;
    }

    /**
     * Display a listing of the Cabine.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cabines = $this->cabineRepository->all();

        return view('cabines.index')
            ->with('cabines', $cabines);
    }

    /**
     * Show the form for creating a new Cabine.
     *
     * @return Response
     */
    public function create()
    {
        return view('cabines.create');
    }

    /**
     * Store a newly created Cabine in storage.
     *
     * @param CreateCabineRequest $request
     *
     * @return Response
     */
    public function store(CreateCabineRequest $request)
    {
        $input = $request->all();

        $cabine = $this->cabineRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cabines.singular')]));

        return redirect(route('cabines.index'));
    }

    /**
     * Display the specified Cabine.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cabine = $this->cabineRepository->find($id);

        if (empty($cabine)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cabines.singular')]));

            return redirect(route('cabines.index'));
        }

        return view('cabines.show')->with('cabine', $cabine);
    }

    /**
     * Show the form for editing the specified Cabine.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cabine = $this->cabineRepository->find($id);

        if (empty($cabine)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cabines.singular')]));

            return redirect(route('cabines.index'));
        }

        return view('cabines.edit')->with('cabine', $cabine);
    }

    /**
     * Update the specified Cabine in storage.
     *
     * @param int $id
     * @param UpdateCabineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCabineRequest $request)
    {
        $cabine = $this->cabineRepository->find($id);

        if (empty($cabine)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cabines.singular')]));

            return redirect(route('cabines.index'));
        }

        $cabine = $this->cabineRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cabines.singular')]));

        return redirect(route('cabines.index'));
    }

    /**
     * Remove the specified Cabine from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cabine = $this->cabineRepository->find($id);

        if (empty($cabine)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cabines.singular')]));

            return redirect(route('cabines.index'));
        }

        $this->cabineRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cabines.singular')]));

        return redirect(route('cabines.index'));
    }
}
