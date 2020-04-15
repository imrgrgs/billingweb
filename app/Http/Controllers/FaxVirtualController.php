<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaxVirtualRequest;
use App\Http\Requests\UpdateFaxVirtualRequest;
use App\Repositories\FaxVirtualRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaxVirtualController extends AppBaseController
{
    /** @var  FaxVirtualRepository */
    private $faxVirtualRepository;

    public function __construct(FaxVirtualRepository $faxVirtualRepo)
    {
        $this->faxVirtualRepository = $faxVirtualRepo;
    }

    /**
     * Display a listing of the FaxVirtual.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faxVirtuals = $this->faxVirtualRepository->all();

        return view('fax_virtuals.index')
            ->with('faxVirtuals', $faxVirtuals);
    }

    /**
     * Show the form for creating a new FaxVirtual.
     *
     * @return Response
     */
    public function create()
    {
        return view('fax_virtuals.create');
    }

    /**
     * Store a newly created FaxVirtual in storage.
     *
     * @param CreateFaxVirtualRequest $request
     *
     * @return Response
     */
    public function store(CreateFaxVirtualRequest $request)
    {
        $input = $request->all();

        $faxVirtual = $this->faxVirtualRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faxVirtuals.singular')]));

        return redirect(route('faxVirtuals.index'));
    }

    /**
     * Display the specified FaxVirtual.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faxVirtual = $this->faxVirtualRepository->find($id);

        if (empty($faxVirtual)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtuals.singular')]));

            return redirect(route('faxVirtuals.index'));
        }

        return view('fax_virtuals.show')->with('faxVirtual', $faxVirtual);
    }

    /**
     * Show the form for editing the specified FaxVirtual.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faxVirtual = $this->faxVirtualRepository->find($id);

        if (empty($faxVirtual)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtuals.singular')]));

            return redirect(route('faxVirtuals.index'));
        }

        return view('fax_virtuals.edit')->with('faxVirtual', $faxVirtual);
    }

    /**
     * Update the specified FaxVirtual in storage.
     *
     * @param int $id
     * @param UpdateFaxVirtualRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaxVirtualRequest $request)
    {
        $faxVirtual = $this->faxVirtualRepository->find($id);

        if (empty($faxVirtual)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtuals.singular')]));

            return redirect(route('faxVirtuals.index'));
        }

        $faxVirtual = $this->faxVirtualRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faxVirtuals.singular')]));

        return redirect(route('faxVirtuals.index'));
    }

    /**
     * Remove the specified FaxVirtual from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faxVirtual = $this->faxVirtualRepository->find($id);

        if (empty($faxVirtual)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faxVirtuals.singular')]));

            return redirect(route('faxVirtuals.index'));
        }

        $this->faxVirtualRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faxVirtuals.singular')]));

        return redirect(route('faxVirtuals.index'));
    }
}
