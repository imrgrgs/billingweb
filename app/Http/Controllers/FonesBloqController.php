<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonesBloqRequest;
use App\Http\Requests\UpdateFonesBloqRequest;
use App\Repositories\FonesBloqRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FonesBloqController extends AppBaseController
{
    /** @var  FonesBloqRepository */
    private $fonesBloqRepository;

    public function __construct(FonesBloqRepository $fonesBloqRepo)
    {
        $this->fonesBloqRepository = $fonesBloqRepo;
    }

    /**
     * Display a listing of the FonesBloq.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fonesBloqs = $this->fonesBloqRepository->all();

        return view('fones_bloqs.index')
            ->with('fonesBloqs', $fonesBloqs);
    }

    /**
     * Show the form for creating a new FonesBloq.
     *
     * @return Response
     */
    public function create()
    {
        return view('fones_bloqs.create');
    }

    /**
     * Store a newly created FonesBloq in storage.
     *
     * @param CreateFonesBloqRequest $request
     *
     * @return Response
     */
    public function store(CreateFonesBloqRequest $request)
    {
        $input = $request->all();

        $fonesBloq = $this->fonesBloqRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fonesBloqs.singular')]));

        return redirect(route('fonesBloqs.index'));
    }

    /**
     * Display the specified FonesBloq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fonesBloq = $this->fonesBloqRepository->find($id);

        if (empty($fonesBloq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesBloqs.singular')]));

            return redirect(route('fonesBloqs.index'));
        }

        return view('fones_bloqs.show')->with('fonesBloq', $fonesBloq);
    }

    /**
     * Show the form for editing the specified FonesBloq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fonesBloq = $this->fonesBloqRepository->find($id);

        if (empty($fonesBloq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesBloqs.singular')]));

            return redirect(route('fonesBloqs.index'));
        }

        return view('fones_bloqs.edit')->with('fonesBloq', $fonesBloq);
    }

    /**
     * Update the specified FonesBloq in storage.
     *
     * @param int $id
     * @param UpdateFonesBloqRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFonesBloqRequest $request)
    {
        $fonesBloq = $this->fonesBloqRepository->find($id);

        if (empty($fonesBloq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesBloqs.singular')]));

            return redirect(route('fonesBloqs.index'));
        }

        $fonesBloq = $this->fonesBloqRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fonesBloqs.singular')]));

        return redirect(route('fonesBloqs.index'));
    }

    /**
     * Remove the specified FonesBloq from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fonesBloq = $this->fonesBloqRepository->find($id);

        if (empty($fonesBloq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesBloqs.singular')]));

            return redirect(route('fonesBloqs.index'));
        }

        $this->fonesBloqRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fonesBloqs.singular')]));

        return redirect(route('fonesBloqs.index'));
    }
}
