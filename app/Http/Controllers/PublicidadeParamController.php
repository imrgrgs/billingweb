<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicidadeParamRequest;
use App\Http\Requests\UpdatePublicidadeParamRequest;
use App\Repositories\PublicidadeParamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PublicidadeParamController extends AppBaseController
{
    /** @var  PublicidadeParamRepository */
    private $publicidadeParamRepository;

    public function __construct(PublicidadeParamRepository $publicidadeParamRepo)
    {
        $this->publicidadeParamRepository = $publicidadeParamRepo;
    }

    /**
     * Display a listing of the PublicidadeParam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $publicidadeParams = $this->publicidadeParamRepository->all();

        return view('publicidade_params.index')
            ->with('publicidadeParams', $publicidadeParams);
    }

    /**
     * Show the form for creating a new PublicidadeParam.
     *
     * @return Response
     */
    public function create()
    {
        return view('publicidade_params.create');
    }

    /**
     * Store a newly created PublicidadeParam in storage.
     *
     * @param CreatePublicidadeParamRequest $request
     *
     * @return Response
     */
    public function store(CreatePublicidadeParamRequest $request)
    {
        $input = $request->all();

        $publicidadeParam = $this->publicidadeParamRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/publicidadeParams.singular')]));

        return redirect(route('publicidadeParams.index'));
    }

    /**
     * Display the specified PublicidadeParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publicidadeParam = $this->publicidadeParamRepository->find($id);

        if (empty($publicidadeParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeParams.singular')]));

            return redirect(route('publicidadeParams.index'));
        }

        return view('publicidade_params.show')->with('publicidadeParam', $publicidadeParam);
    }

    /**
     * Show the form for editing the specified PublicidadeParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publicidadeParam = $this->publicidadeParamRepository->find($id);

        if (empty($publicidadeParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeParams.singular')]));

            return redirect(route('publicidadeParams.index'));
        }

        return view('publicidade_params.edit')->with('publicidadeParam', $publicidadeParam);
    }

    /**
     * Update the specified PublicidadeParam in storage.
     *
     * @param int $id
     * @param UpdatePublicidadeParamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePublicidadeParamRequest $request)
    {
        $publicidadeParam = $this->publicidadeParamRepository->find($id);

        if (empty($publicidadeParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeParams.singular')]));

            return redirect(route('publicidadeParams.index'));
        }

        $publicidadeParam = $this->publicidadeParamRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/publicidadeParams.singular')]));

        return redirect(route('publicidadeParams.index'));
    }

    /**
     * Remove the specified PublicidadeParam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publicidadeParam = $this->publicidadeParamRepository->find($id);

        if (empty($publicidadeParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeParams.singular')]));

            return redirect(route('publicidadeParams.index'));
        }

        $this->publicidadeParamRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/publicidadeParams.singular')]));

        return redirect(route('publicidadeParams.index'));
    }
}
