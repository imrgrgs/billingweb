<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDefinePstnRequest;
use App\Http\Requests\UpdateDefinePstnRequest;
use App\Repositories\DefinePstnRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DefinePstnController extends AppBaseController
{
    /** @var  DefinePstnRepository */
    private $definePstnRepository;

    public function __construct(DefinePstnRepository $definePstnRepo)
    {
        $this->definePstnRepository = $definePstnRepo;
    }

    /**
     * Display a listing of the DefinePstn.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $definePstns = $this->definePstnRepository->all();

        return view('define_pstns.index')
            ->with('definePstns', $definePstns);
    }

    /**
     * Show the form for creating a new DefinePstn.
     *
     * @return Response
     */
    public function create()
    {
        return view('define_pstns.create');
    }

    /**
     * Store a newly created DefinePstn in storage.
     *
     * @param CreateDefinePstnRequest $request
     *
     * @return Response
     */
    public function store(CreateDefinePstnRequest $request)
    {
        $input = $request->all();

        $definePstn = $this->definePstnRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/definePstns.singular')]));

        return redirect(route('definePstns.index'));
    }

    /**
     * Display the specified DefinePstn.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $definePstn = $this->definePstnRepository->find($id);

        if (empty($definePstn)) {
            Flash::error(__('messages.not_found', ['model' => __('models/definePstns.singular')]));

            return redirect(route('definePstns.index'));
        }

        return view('define_pstns.show')->with('definePstn', $definePstn);
    }

    /**
     * Show the form for editing the specified DefinePstn.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $definePstn = $this->definePstnRepository->find($id);

        if (empty($definePstn)) {
            Flash::error(__('messages.not_found', ['model' => __('models/definePstns.singular')]));

            return redirect(route('definePstns.index'));
        }

        return view('define_pstns.edit')->with('definePstn', $definePstn);
    }

    /**
     * Update the specified DefinePstn in storage.
     *
     * @param int $id
     * @param UpdateDefinePstnRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDefinePstnRequest $request)
    {
        $definePstn = $this->definePstnRepository->find($id);

        if (empty($definePstn)) {
            Flash::error(__('messages.not_found', ['model' => __('models/definePstns.singular')]));

            return redirect(route('definePstns.index'));
        }

        $definePstn = $this->definePstnRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/definePstns.singular')]));

        return redirect(route('definePstns.index'));
    }

    /**
     * Remove the specified DefinePstn from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $definePstn = $this->definePstnRepository->find($id);

        if (empty($definePstn)) {
            Flash::error(__('messages.not_found', ['model' => __('models/definePstns.singular')]));

            return redirect(route('definePstns.index'));
        }

        $this->definePstnRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/definePstns.singular')]));

        return redirect(route('definePstns.index'));
    }
}
