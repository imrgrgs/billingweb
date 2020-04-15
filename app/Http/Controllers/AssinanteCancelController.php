<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssinanteCancelRequest;
use App\Http\Requests\UpdateAssinanteCancelRequest;
use App\Repositories\AssinanteCancelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssinanteCancelController extends AppBaseController
{
    /** @var  AssinanteCancelRepository */
    private $assinanteCancelRepository;

    public function __construct(AssinanteCancelRepository $assinanteCancelRepo)
    {
        $this->assinanteCancelRepository = $assinanteCancelRepo;
    }

    /**
     * Display a listing of the AssinanteCancel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assinanteCancels = $this->assinanteCancelRepository->all();

        return view('assinante_cancels.index')
            ->with('assinanteCancels', $assinanteCancels);
    }

    /**
     * Show the form for creating a new AssinanteCancel.
     *
     * @return Response
     */
    public function create()
    {
        return view('assinante_cancels.create');
    }

    /**
     * Store a newly created AssinanteCancel in storage.
     *
     * @param CreateAssinanteCancelRequest $request
     *
     * @return Response
     */
    public function store(CreateAssinanteCancelRequest $request)
    {
        $input = $request->all();

        $assinanteCancel = $this->assinanteCancelRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/assinanteCancels.singular')]));

        return redirect(route('assinanteCancels.index'));
    }

    /**
     * Display the specified AssinanteCancel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assinanteCancel = $this->assinanteCancelRepository->find($id);

        if (empty($assinanteCancel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancels.singular')]));

            return redirect(route('assinanteCancels.index'));
        }

        return view('assinante_cancels.show')->with('assinanteCancel', $assinanteCancel);
    }

    /**
     * Show the form for editing the specified AssinanteCancel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assinanteCancel = $this->assinanteCancelRepository->find($id);

        if (empty($assinanteCancel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancels.singular')]));

            return redirect(route('assinanteCancels.index'));
        }

        return view('assinante_cancels.edit')->with('assinanteCancel', $assinanteCancel);
    }

    /**
     * Update the specified AssinanteCancel in storage.
     *
     * @param int $id
     * @param UpdateAssinanteCancelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssinanteCancelRequest $request)
    {
        $assinanteCancel = $this->assinanteCancelRepository->find($id);

        if (empty($assinanteCancel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancels.singular')]));

            return redirect(route('assinanteCancels.index'));
        }

        $assinanteCancel = $this->assinanteCancelRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/assinanteCancels.singular')]));

        return redirect(route('assinanteCancels.index'));
    }

    /**
     * Remove the specified AssinanteCancel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assinanteCancel = $this->assinanteCancelRepository->find($id);

        if (empty($assinanteCancel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancels.singular')]));

            return redirect(route('assinanteCancels.index'));
        }

        $this->assinanteCancelRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/assinanteCancels.singular')]));

        return redirect(route('assinanteCancels.index'));
    }
}
