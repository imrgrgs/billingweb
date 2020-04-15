<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonesAnatelRequest;
use App\Http\Requests\UpdateFonesAnatelRequest;
use App\Repositories\FonesAnatelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FonesAnatelController extends AppBaseController
{
    /** @var  FonesAnatelRepository */
    private $fonesAnatelRepository;

    public function __construct(FonesAnatelRepository $fonesAnatelRepo)
    {
        $this->fonesAnatelRepository = $fonesAnatelRepo;
    }

    /**
     * Display a listing of the FonesAnatel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fonesAnatels = $this->fonesAnatelRepository->all();

        return view('fones_anatels.index')
            ->with('fonesAnatels', $fonesAnatels);
    }

    /**
     * Show the form for creating a new FonesAnatel.
     *
     * @return Response
     */
    public function create()
    {
        return view('fones_anatels.create');
    }

    /**
     * Store a newly created FonesAnatel in storage.
     *
     * @param CreateFonesAnatelRequest $request
     *
     * @return Response
     */
    public function store(CreateFonesAnatelRequest $request)
    {
        $input = $request->all();

        $fonesAnatel = $this->fonesAnatelRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fonesAnatels.singular')]));

        return redirect(route('fonesAnatels.index'));
    }

    /**
     * Display the specified FonesAnatel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fonesAnatel = $this->fonesAnatelRepository->find($id);

        if (empty($fonesAnatel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesAnatels.singular')]));

            return redirect(route('fonesAnatels.index'));
        }

        return view('fones_anatels.show')->with('fonesAnatel', $fonesAnatel);
    }

    /**
     * Show the form for editing the specified FonesAnatel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fonesAnatel = $this->fonesAnatelRepository->find($id);

        if (empty($fonesAnatel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesAnatels.singular')]));

            return redirect(route('fonesAnatels.index'));
        }

        return view('fones_anatels.edit')->with('fonesAnatel', $fonesAnatel);
    }

    /**
     * Update the specified FonesAnatel in storage.
     *
     * @param int $id
     * @param UpdateFonesAnatelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFonesAnatelRequest $request)
    {
        $fonesAnatel = $this->fonesAnatelRepository->find($id);

        if (empty($fonesAnatel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesAnatels.singular')]));

            return redirect(route('fonesAnatels.index'));
        }

        $fonesAnatel = $this->fonesAnatelRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fonesAnatels.singular')]));

        return redirect(route('fonesAnatels.index'));
    }

    /**
     * Remove the specified FonesAnatel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fonesAnatel = $this->fonesAnatelRepository->find($id);

        if (empty($fonesAnatel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesAnatels.singular')]));

            return redirect(route('fonesAnatels.index'));
        }

        $this->fonesAnatelRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fonesAnatels.singular')]));

        return redirect(route('fonesAnatels.index'));
    }
}
