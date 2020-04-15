<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVoipToVoipRequest;
use App\Http\Requests\UpdateVoipToVoipRequest;
use App\Repositories\VoipToVoipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VoipToVoipController extends AppBaseController
{
    /** @var  VoipToVoipRepository */
    private $voipToVoipRepository;

    public function __construct(VoipToVoipRepository $voipToVoipRepo)
    {
        $this->voipToVoipRepository = $voipToVoipRepo;
    }

    /**
     * Display a listing of the VoipToVoip.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $voipToVoips = $this->voipToVoipRepository->all();

        return view('voip_to_voips.index')
            ->with('voipToVoips', $voipToVoips);
    }

    /**
     * Show the form for creating a new VoipToVoip.
     *
     * @return Response
     */
    public function create()
    {
        return view('voip_to_voips.create');
    }

    /**
     * Store a newly created VoipToVoip in storage.
     *
     * @param CreateVoipToVoipRequest $request
     *
     * @return Response
     */
    public function store(CreateVoipToVoipRequest $request)
    {
        $input = $request->all();

        $voipToVoip = $this->voipToVoipRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/voipToVoips.singular')]));

        return redirect(route('voipToVoips.index'));
    }

    /**
     * Display the specified VoipToVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $voipToVoip = $this->voipToVoipRepository->find($id);

        if (empty($voipToVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/voipToVoips.singular')]));

            return redirect(route('voipToVoips.index'));
        }

        return view('voip_to_voips.show')->with('voipToVoip', $voipToVoip);
    }

    /**
     * Show the form for editing the specified VoipToVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $voipToVoip = $this->voipToVoipRepository->find($id);

        if (empty($voipToVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/voipToVoips.singular')]));

            return redirect(route('voipToVoips.index'));
        }

        return view('voip_to_voips.edit')->with('voipToVoip', $voipToVoip);
    }

    /**
     * Update the specified VoipToVoip in storage.
     *
     * @param int $id
     * @param UpdateVoipToVoipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVoipToVoipRequest $request)
    {
        $voipToVoip = $this->voipToVoipRepository->find($id);

        if (empty($voipToVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/voipToVoips.singular')]));

            return redirect(route('voipToVoips.index'));
        }

        $voipToVoip = $this->voipToVoipRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/voipToVoips.singular')]));

        return redirect(route('voipToVoips.index'));
    }

    /**
     * Remove the specified VoipToVoip from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $voipToVoip = $this->voipToVoipRepository->find($id);

        if (empty($voipToVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/voipToVoips.singular')]));

            return redirect(route('voipToVoips.index'));
        }

        $this->voipToVoipRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/voipToVoips.singular')]));

        return redirect(route('voipToVoips.index'));
    }
}
