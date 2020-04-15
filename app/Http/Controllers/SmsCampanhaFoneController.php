<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSmsCampanhaFoneRequest;
use App\Http\Requests\UpdateSmsCampanhaFoneRequest;
use App\Repositories\SmsCampanhaFoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SmsCampanhaFoneController extends AppBaseController
{
    /** @var  SmsCampanhaFoneRepository */
    private $smsCampanhaFoneRepository;

    public function __construct(SmsCampanhaFoneRepository $smsCampanhaFoneRepo)
    {
        $this->smsCampanhaFoneRepository = $smsCampanhaFoneRepo;
    }

    /**
     * Display a listing of the SmsCampanhaFone.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $smsCampanhaFones = $this->smsCampanhaFoneRepository->all();

        return view('sms_campanha_fones.index')
            ->with('smsCampanhaFones', $smsCampanhaFones);
    }

    /**
     * Show the form for creating a new SmsCampanhaFone.
     *
     * @return Response
     */
    public function create()
    {
        return view('sms_campanha_fones.create');
    }

    /**
     * Store a newly created SmsCampanhaFone in storage.
     *
     * @param CreateSmsCampanhaFoneRequest $request
     *
     * @return Response
     */
    public function store(CreateSmsCampanhaFoneRequest $request)
    {
        $input = $request->all();

        $smsCampanhaFone = $this->smsCampanhaFoneRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/smsCampanhaFones.singular')]));

        return redirect(route('smsCampanhaFones.index'));
    }

    /**
     * Display the specified SmsCampanhaFone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $smsCampanhaFone = $this->smsCampanhaFoneRepository->find($id);

        if (empty($smsCampanhaFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhaFones.singular')]));

            return redirect(route('smsCampanhaFones.index'));
        }

        return view('sms_campanha_fones.show')->with('smsCampanhaFone', $smsCampanhaFone);
    }

    /**
     * Show the form for editing the specified SmsCampanhaFone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $smsCampanhaFone = $this->smsCampanhaFoneRepository->find($id);

        if (empty($smsCampanhaFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhaFones.singular')]));

            return redirect(route('smsCampanhaFones.index'));
        }

        return view('sms_campanha_fones.edit')->with('smsCampanhaFone', $smsCampanhaFone);
    }

    /**
     * Update the specified SmsCampanhaFone in storage.
     *
     * @param int $id
     * @param UpdateSmsCampanhaFoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSmsCampanhaFoneRequest $request)
    {
        $smsCampanhaFone = $this->smsCampanhaFoneRepository->find($id);

        if (empty($smsCampanhaFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhaFones.singular')]));

            return redirect(route('smsCampanhaFones.index'));
        }

        $smsCampanhaFone = $this->smsCampanhaFoneRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/smsCampanhaFones.singular')]));

        return redirect(route('smsCampanhaFones.index'));
    }

    /**
     * Remove the specified SmsCampanhaFone from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $smsCampanhaFone = $this->smsCampanhaFoneRepository->find($id);

        if (empty($smsCampanhaFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhaFones.singular')]));

            return redirect(route('smsCampanhaFones.index'));
        }

        $this->smsCampanhaFoneRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/smsCampanhaFones.singular')]));

        return redirect(route('smsCampanhaFones.index'));
    }
}
