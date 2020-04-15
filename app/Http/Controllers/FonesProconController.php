<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonesProconRequest;
use App\Http\Requests\UpdateFonesProconRequest;
use App\Repositories\FonesProconRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FonesProconController extends AppBaseController
{
    /** @var  FonesProconRepository */
    private $fonesProconRepository;

    public function __construct(FonesProconRepository $fonesProconRepo)
    {
        $this->fonesProconRepository = $fonesProconRepo;
    }

    /**
     * Display a listing of the FonesProcon.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fonesProcons = $this->fonesProconRepository->all();

        return view('fones_procons.index')
            ->with('fonesProcons', $fonesProcons);
    }

    /**
     * Show the form for creating a new FonesProcon.
     *
     * @return Response
     */
    public function create()
    {
        return view('fones_procons.create');
    }

    /**
     * Store a newly created FonesProcon in storage.
     *
     * @param CreateFonesProconRequest $request
     *
     * @return Response
     */
    public function store(CreateFonesProconRequest $request)
    {
        $input = $request->all();

        $fonesProcon = $this->fonesProconRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fonesProcons.singular')]));

        return redirect(route('fonesProcons.index'));
    }

    /**
     * Display the specified FonesProcon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fonesProcon = $this->fonesProconRepository->find($id);

        if (empty($fonesProcon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesProcons.singular')]));

            return redirect(route('fonesProcons.index'));
        }

        return view('fones_procons.show')->with('fonesProcon', $fonesProcon);
    }

    /**
     * Show the form for editing the specified FonesProcon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fonesProcon = $this->fonesProconRepository->find($id);

        if (empty($fonesProcon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesProcons.singular')]));

            return redirect(route('fonesProcons.index'));
        }

        return view('fones_procons.edit')->with('fonesProcon', $fonesProcon);
    }

    /**
     * Update the specified FonesProcon in storage.
     *
     * @param int $id
     * @param UpdateFonesProconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFonesProconRequest $request)
    {
        $fonesProcon = $this->fonesProconRepository->find($id);

        if (empty($fonesProcon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesProcons.singular')]));

            return redirect(route('fonesProcons.index'));
        }

        $fonesProcon = $this->fonesProconRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fonesProcons.singular')]));

        return redirect(route('fonesProcons.index'));
    }

    /**
     * Remove the specified FonesProcon from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fonesProcon = $this->fonesProconRepository->find($id);

        if (empty($fonesProcon)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesProcons.singular')]));

            return redirect(route('fonesProcons.index'));
        }

        $this->fonesProconRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fonesProcons.singular')]));

        return redirect(route('fonesProcons.index'));
    }
}
