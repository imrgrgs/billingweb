<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCdrRequest;
use App\Http\Requests\UpdateCdrRequest;
use App\Repositories\CdrRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CdrController extends AppBaseController
{
    /** @var  CdrRepository */
    private $cdrRepository;

    public function __construct(CdrRepository $cdrRepo)
    {
        $this->cdrRepository = $cdrRepo;
    }

    /**
     * Display a listing of the Cdr.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cdrs = $this->cdrRepository->all();

        return view('cdrs.index')
            ->with('cdrs', $cdrs);
    }

    /**
     * Show the form for creating a new Cdr.
     *
     * @return Response
     */
    public function create()
    {
        return view('cdrs.create');
    }

    /**
     * Store a newly created Cdr in storage.
     *
     * @param CreateCdrRequest $request
     *
     * @return Response
     */
    public function store(CreateCdrRequest $request)
    {
        $input = $request->all();

        $cdr = $this->cdrRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cdrs.singular')]));

        return redirect(route('cdrs.index'));
    }

    /**
     * Display the specified Cdr.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cdr = $this->cdrRepository->find($id);

        if (empty($cdr)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cdrs.singular')]));

            return redirect(route('cdrs.index'));
        }

        return view('cdrs.show')->with('cdr', $cdr);
    }

    /**
     * Show the form for editing the specified Cdr.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cdr = $this->cdrRepository->find($id);

        if (empty($cdr)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cdrs.singular')]));

            return redirect(route('cdrs.index'));
        }

        return view('cdrs.edit')->with('cdr', $cdr);
    }

    /**
     * Update the specified Cdr in storage.
     *
     * @param int $id
     * @param UpdateCdrRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCdrRequest $request)
    {
        $cdr = $this->cdrRepository->find($id);

        if (empty($cdr)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cdrs.singular')]));

            return redirect(route('cdrs.index'));
        }

        $cdr = $this->cdrRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cdrs.singular')]));

        return redirect(route('cdrs.index'));
    }

    /**
     * Remove the specified Cdr from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cdr = $this->cdrRepository->find($id);

        if (empty($cdr)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cdrs.singular')]));

            return redirect(route('cdrs.index'));
        }

        $this->cdrRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cdrs.singular')]));

        return redirect(route('cdrs.index'));
    }
}
