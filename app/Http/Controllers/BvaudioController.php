<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBvaudioRequest;
use App\Http\Requests\UpdateBvaudioRequest;
use App\Repositories\BvaudioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BvaudioController extends AppBaseController
{
    /** @var  BvaudioRepository */
    private $bvaudioRepository;

    public function __construct(BvaudioRepository $bvaudioRepo)
    {
        $this->bvaudioRepository = $bvaudioRepo;
    }

    /**
     * Display a listing of the Bvaudio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bvaudios = $this->bvaudioRepository->all();

        return view('bvaudios.index')
            ->with('bvaudios', $bvaudios);
    }

    /**
     * Show the form for creating a new Bvaudio.
     *
     * @return Response
     */
    public function create()
    {
        return view('bvaudios.create');
    }

    /**
     * Store a newly created Bvaudio in storage.
     *
     * @param CreateBvaudioRequest $request
     *
     * @return Response
     */
    public function store(CreateBvaudioRequest $request)
    {
        $input = $request->all();

        $bvaudio = $this->bvaudioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bvaudios.singular')]));

        return redirect(route('bvaudios.index'));
    }

    /**
     * Display the specified Bvaudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bvaudio = $this->bvaudioRepository->find($id);

        if (empty($bvaudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bvaudios.singular')]));

            return redirect(route('bvaudios.index'));
        }

        return view('bvaudios.show')->with('bvaudio', $bvaudio);
    }

    /**
     * Show the form for editing the specified Bvaudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bvaudio = $this->bvaudioRepository->find($id);

        if (empty($bvaudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bvaudios.singular')]));

            return redirect(route('bvaudios.index'));
        }

        return view('bvaudios.edit')->with('bvaudio', $bvaudio);
    }

    /**
     * Update the specified Bvaudio in storage.
     *
     * @param int $id
     * @param UpdateBvaudioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBvaudioRequest $request)
    {
        $bvaudio = $this->bvaudioRepository->find($id);

        if (empty($bvaudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bvaudios.singular')]));

            return redirect(route('bvaudios.index'));
        }

        $bvaudio = $this->bvaudioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bvaudios.singular')]));

        return redirect(route('bvaudios.index'));
    }

    /**
     * Remove the specified Bvaudio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bvaudio = $this->bvaudioRepository->find($id);

        if (empty($bvaudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bvaudios.singular')]));

            return redirect(route('bvaudios.index'));
        }

        $this->bvaudioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bvaudios.singular')]));

        return redirect(route('bvaudios.index'));
    }
}
