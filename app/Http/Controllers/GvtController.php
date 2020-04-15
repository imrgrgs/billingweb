<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGvtRequest;
use App\Http\Requests\UpdateGvtRequest;
use App\Repositories\GvtRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GvtController extends AppBaseController
{
    /** @var  GvtRepository */
    private $gvtRepository;

    public function __construct(GvtRepository $gvtRepo)
    {
        $this->gvtRepository = $gvtRepo;
    }

    /**
     * Display a listing of the Gvt.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gvts = $this->gvtRepository->all();

        return view('gvts.index')
            ->with('gvts', $gvts);
    }

    /**
     * Show the form for creating a new Gvt.
     *
     * @return Response
     */
    public function create()
    {
        return view('gvts.create');
    }

    /**
     * Store a newly created Gvt in storage.
     *
     * @param CreateGvtRequest $request
     *
     * @return Response
     */
    public function store(CreateGvtRequest $request)
    {
        $input = $request->all();

        $gvt = $this->gvtRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/gvts.singular')]));

        return redirect(route('gvts.index'));
    }

    /**
     * Display the specified Gvt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gvt = $this->gvtRepository->find($id);

        if (empty($gvt)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gvts.singular')]));

            return redirect(route('gvts.index'));
        }

        return view('gvts.show')->with('gvt', $gvt);
    }

    /**
     * Show the form for editing the specified Gvt.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gvt = $this->gvtRepository->find($id);

        if (empty($gvt)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gvts.singular')]));

            return redirect(route('gvts.index'));
        }

        return view('gvts.edit')->with('gvt', $gvt);
    }

    /**
     * Update the specified Gvt in storage.
     *
     * @param int $id
     * @param UpdateGvtRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGvtRequest $request)
    {
        $gvt = $this->gvtRepository->find($id);

        if (empty($gvt)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gvts.singular')]));

            return redirect(route('gvts.index'));
        }

        $gvt = $this->gvtRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/gvts.singular')]));

        return redirect(route('gvts.index'));
    }

    /**
     * Remove the specified Gvt from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gvt = $this->gvtRepository->find($id);

        if (empty($gvt)) {
            Flash::error(__('messages.not_found', ['model' => __('models/gvts.singular')]));

            return redirect(route('gvts.index'));
        }

        $this->gvtRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/gvts.singular')]));

        return redirect(route('gvts.index'));
    }
}
