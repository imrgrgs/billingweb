<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaxVirtualParamRequest;
use App\Http\Requests\UpdateFaxVirtualParamRequest;
use App\Repositories\FaxVirtualParamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaxVirtualParamController extends AppBaseController
{
    /** @var  FaxVirtualParamRepository */
    private $faxVirtualParamRepository;

    public function __construct(FaxVirtualParamRepository $faxVirtualParamRepo)
    {
        $this->faxVirtualParamRepository = $faxVirtualParamRepo;
    }

    /**
     * Display a listing of the FaxVirtualParam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faxVirtualParams = $this->faxVirtualParamRepository->all();

        return view('fax_virtual_params.index')
            ->with('faxVirtualParams', $faxVirtualParams);
    }

    /**
     * Show the form for creating a new FaxVirtualParam.
     *
     * @return Response
     */
    public function create()
    {
        return view('fax_virtual_params.create');
    }

    /**
     * Store a newly created FaxVirtualParam in storage.
     *
     * @param CreateFaxVirtualParamRequest $request
     *
     * @return Response
     */
    public function store(CreateFaxVirtualParamRequest $request)
    {
        $input = $request->all();

        $faxVirtualParam = $this->faxVirtualParamRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faxVirtualParams.singular')]));

        return redirect(route('faxVirtualParams.index'));
    }

    /**
     * Display the specified FaxVirtualParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faxVirtualParam = $this->faxVirtualParamRepository->find($id);

        if (empty($faxVirtualParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtualParams.singular')]));

            return redirect(route('faxVirtualParams.index'));
        }

        return view('fax_virtual_params.show')->with('faxVirtualParam', $faxVirtualParam);
    }

    /**
     * Show the form for editing the specified FaxVirtualParam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faxVirtualParam = $this->faxVirtualParamRepository->find($id);

        if (empty($faxVirtualParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtualParams.singular')]));

            return redirect(route('faxVirtualParams.index'));
        }

        return view('fax_virtual_params.edit')->with('faxVirtualParam', $faxVirtualParam);
    }

    /**
     * Update the specified FaxVirtualParam in storage.
     *
     * @param int $id
     * @param UpdateFaxVirtualParamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaxVirtualParamRequest $request)
    {
        $faxVirtualParam = $this->faxVirtualParamRepository->find($id);

        if (empty($faxVirtualParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtualParams.singular')]));

            return redirect(route('faxVirtualParams.index'));
        }

        $faxVirtualParam = $this->faxVirtualParamRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faxVirtualParams.singular')]));

        return redirect(route('faxVirtualParams.index'));
    }

    /**
     * Remove the specified FaxVirtualParam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faxVirtualParam = $this->faxVirtualParamRepository->find($id);

        if (empty($faxVirtualParam)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtualParams.singular')]));

            return redirect(route('faxVirtualParams.index'));
        }

        $this->faxVirtualParamRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faxVirtualParams.singular')]));

        return redirect(route('faxVirtualParams.index'));
    }
}
