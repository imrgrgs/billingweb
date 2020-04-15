<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLigOnlineRequest;
use App\Http\Requests\UpdateLigOnlineRequest;
use App\Repositories\LigOnlineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LigOnlineController extends AppBaseController
{
    /** @var  LigOnlineRepository */
    private $ligOnlineRepository;

    public function __construct(LigOnlineRepository $ligOnlineRepo)
    {
        $this->ligOnlineRepository = $ligOnlineRepo;
    }

    /**
     * Display a listing of the LigOnline.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ligOnlines = $this->ligOnlineRepository->all();

        return view('lig_onlines.index')
            ->with('ligOnlines', $ligOnlines);
    }

    /**
     * Show the form for creating a new LigOnline.
     *
     * @return Response
     */
    public function create()
    {
        return view('lig_onlines.create');
    }

    /**
     * Store a newly created LigOnline in storage.
     *
     * @param CreateLigOnlineRequest $request
     *
     * @return Response
     */
    public function store(CreateLigOnlineRequest $request)
    {
        $input = $request->all();

        $ligOnline = $this->ligOnlineRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ligOnlines.singular')]));

        return redirect(route('ligOnlines.index'));
    }

    /**
     * Display the specified LigOnline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ligOnline = $this->ligOnlineRepository->find($id);

        if (empty($ligOnline)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligOnlines.singular')]));

            return redirect(route('ligOnlines.index'));
        }

        return view('lig_onlines.show')->with('ligOnline', $ligOnline);
    }

    /**
     * Show the form for editing the specified LigOnline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ligOnline = $this->ligOnlineRepository->find($id);

        if (empty($ligOnline)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligOnlines.singular')]));

            return redirect(route('ligOnlines.index'));
        }

        return view('lig_onlines.edit')->with('ligOnline', $ligOnline);
    }

    /**
     * Update the specified LigOnline in storage.
     *
     * @param int $id
     * @param UpdateLigOnlineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLigOnlineRequest $request)
    {
        $ligOnline = $this->ligOnlineRepository->find($id);

        if (empty($ligOnline)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligOnlines.singular')]));

            return redirect(route('ligOnlines.index'));
        }

        $ligOnline = $this->ligOnlineRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ligOnlines.singular')]));

        return redirect(route('ligOnlines.index'));
    }

    /**
     * Remove the specified LigOnline from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ligOnline = $this->ligOnlineRepository->find($id);

        if (empty($ligOnline)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ligOnlines.singular')]));

            return redirect(route('ligOnlines.index'));
        }

        $this->ligOnlineRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ligOnlines.singular')]));

        return redirect(route('ligOnlines.index'));
    }
}
