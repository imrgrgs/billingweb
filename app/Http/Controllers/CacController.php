<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCacRequest;
use App\Http\Requests\UpdateCacRequest;
use App\Repositories\CacRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CacController extends AppBaseController
{
    /** @var  CacRepository */
    private $cacRepository;

    public function __construct(CacRepository $cacRepo)
    {
        $this->cacRepository = $cacRepo;
    }

    /**
     * Display a listing of the Cac.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cacs = $this->cacRepository->all();

        return view('cacs.index')
            ->with('cacs', $cacs);
    }

    /**
     * Show the form for creating a new Cac.
     *
     * @return Response
     */
    public function create()
    {
        return view('cacs.create');
    }

    /**
     * Store a newly created Cac in storage.
     *
     * @param CreateCacRequest $request
     *
     * @return Response
     */
    public function store(CreateCacRequest $request)
    {
        $input = $request->all();

        $cac = $this->cacRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cacs.singular')]));

        return redirect(route('cacs.index'));
    }

    /**
     * Display the specified Cac.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cac = $this->cacRepository->find($id);

        if (empty($cac)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacs.singular')]));

            return redirect(route('cacs.index'));
        }

        return view('cacs.show')->with('cac', $cac);
    }

    /**
     * Show the form for editing the specified Cac.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cac = $this->cacRepository->find($id);

        if (empty($cac)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacs.singular')]));

            return redirect(route('cacs.index'));
        }

        return view('cacs.edit')->with('cac', $cac);
    }

    /**
     * Update the specified Cac in storage.
     *
     * @param int $id
     * @param UpdateCacRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCacRequest $request)
    {
        $cac = $this->cacRepository->find($id);

        if (empty($cac)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacs.singular')]));

            return redirect(route('cacs.index'));
        }

        $cac = $this->cacRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cacs.singular')]));

        return redirect(route('cacs.index'));
    }

    /**
     * Remove the specified Cac from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cac = $this->cacRepository->find($id);

        if (empty($cac)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cacs.singular')]));

            return redirect(route('cacs.index'));
        }

        $this->cacRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cacs.singular')]));

        return redirect(route('cacs.index'));
    }
}
