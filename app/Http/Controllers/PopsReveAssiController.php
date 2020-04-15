<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePopsReveAssiRequest;
use App\Http\Requests\UpdatePopsReveAssiRequest;
use App\Repositories\PopsReveAssiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PopsReveAssiController extends AppBaseController
{
    /** @var  PopsReveAssiRepository */
    private $popsReveAssiRepository;

    public function __construct(PopsReveAssiRepository $popsReveAssiRepo)
    {
        $this->popsReveAssiRepository = $popsReveAssiRepo;
    }

    /**
     * Display a listing of the PopsReveAssi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $popsReveAssis = $this->popsReveAssiRepository->all();

        return view('pops_reve_assis.index')
            ->with('popsReveAssis', $popsReveAssis);
    }

    /**
     * Show the form for creating a new PopsReveAssi.
     *
     * @return Response
     */
    public function create()
    {
        return view('pops_reve_assis.create');
    }

    /**
     * Store a newly created PopsReveAssi in storage.
     *
     * @param CreatePopsReveAssiRequest $request
     *
     * @return Response
     */
    public function store(CreatePopsReveAssiRequest $request)
    {
        $input = $request->all();

        $popsReveAssi = $this->popsReveAssiRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/popsReveAssis.singular')]));

        return redirect(route('popsReveAssis.index'));
    }

    /**
     * Display the specified PopsReveAssi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $popsReveAssi = $this->popsReveAssiRepository->find($id);

        if (empty($popsReveAssi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/popsReveAssis.singular')]));

            return redirect(route('popsReveAssis.index'));
        }

        return view('pops_reve_assis.show')->with('popsReveAssi', $popsReveAssi);
    }

    /**
     * Show the form for editing the specified PopsReveAssi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $popsReveAssi = $this->popsReveAssiRepository->find($id);

        if (empty($popsReveAssi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/popsReveAssis.singular')]));

            return redirect(route('popsReveAssis.index'));
        }

        return view('pops_reve_assis.edit')->with('popsReveAssi', $popsReveAssi);
    }

    /**
     * Update the specified PopsReveAssi in storage.
     *
     * @param int $id
     * @param UpdatePopsReveAssiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePopsReveAssiRequest $request)
    {
        $popsReveAssi = $this->popsReveAssiRepository->find($id);

        if (empty($popsReveAssi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/popsReveAssis.singular')]));

            return redirect(route('popsReveAssis.index'));
        }

        $popsReveAssi = $this->popsReveAssiRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/popsReveAssis.singular')]));

        return redirect(route('popsReveAssis.index'));
    }

    /**
     * Remove the specified PopsReveAssi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $popsReveAssi = $this->popsReveAssiRepository->find($id);

        if (empty($popsReveAssi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/popsReveAssis.singular')]));

            return redirect(route('popsReveAssis.index'));
        }

        $this->popsReveAssiRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/popsReveAssis.singular')]));

        return redirect(route('popsReveAssis.index'));
    }
}
