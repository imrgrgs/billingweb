<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActiveRequest;
use App\Http\Requests\UpdateActiveRequest;
use App\Repositories\ActiveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ActiveController extends AppBaseController
{
    /** @var  ActiveRepository */
    private $activeRepository;

    public function __construct(ActiveRepository $activeRepo)
    {
        $this->activeRepository = $activeRepo;
    }

    /**
     * Display a listing of the Active.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actives = $this->activeRepository->all();

        return view('actives.index')
            ->with('actives', $actives);
    }

    /**
     * Show the form for creating a new Active.
     *
     * @return Response
     */
    public function create()
    {
        return view('actives.create');
    }

    /**
     * Store a newly created Active in storage.
     *
     * @param CreateActiveRequest $request
     *
     * @return Response
     */
    public function store(CreateActiveRequest $request)
    {
        $input = $request->all();

        $active = $this->activeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/actives.singular')]));

        return redirect(route('actives.index'));
    }

    /**
     * Display the specified Active.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $active = $this->activeRepository->find($id);

        if (empty($active)) {
            Flash::error(__('messages.not_found', ['model' => __('models/actives.singular')]));

            return redirect(route('actives.index'));
        }

        return view('actives.show')->with('active', $active);
    }

    /**
     * Show the form for editing the specified Active.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $active = $this->activeRepository->find($id);

        if (empty($active)) {
            Flash::error(__('messages.not_found', ['model' => __('models/actives.singular')]));

            return redirect(route('actives.index'));
        }

        return view('actives.edit')->with('active', $active);
    }

    /**
     * Update the specified Active in storage.
     *
     * @param int $id
     * @param UpdateActiveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActiveRequest $request)
    {
        $active = $this->activeRepository->find($id);

        if (empty($active)) {
            Flash::error(__('messages.not_found', ['model' => __('models/actives.singular')]));

            return redirect(route('actives.index'));
        }

        $active = $this->activeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/actives.singular')]));

        return redirect(route('actives.index'));
    }

    /**
     * Remove the specified Active from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $active = $this->activeRepository->find($id);

        if (empty($active)) {
            Flash::error(__('messages.not_found', ['model' => __('models/actives.singular')]));

            return redirect(route('actives.index'));
        }

        $this->activeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/actives.singular')]));

        return redirect(route('actives.index'));
    }
}
