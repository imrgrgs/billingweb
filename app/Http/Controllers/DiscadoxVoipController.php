<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscadoxVoipRequest;
use App\Http\Requests\UpdateDiscadoxVoipRequest;
use App\Repositories\DiscadoxVoipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiscadoxVoipController extends AppBaseController
{
    /** @var  DiscadoxVoipRepository */
    private $discadoxVoipRepository;

    public function __construct(DiscadoxVoipRepository $discadoxVoipRepo)
    {
        $this->discadoxVoipRepository = $discadoxVoipRepo;
    }

    /**
     * Display a listing of the DiscadoxVoip.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $discadoxVoips = $this->discadoxVoipRepository->all();

        return view('discadox_voips.index')
            ->with('discadoxVoips', $discadoxVoips);
    }

    /**
     * Show the form for creating a new DiscadoxVoip.
     *
     * @return Response
     */
    public function create()
    {
        return view('discadox_voips.create');
    }

    /**
     * Store a newly created DiscadoxVoip in storage.
     *
     * @param CreateDiscadoxVoipRequest $request
     *
     * @return Response
     */
    public function store(CreateDiscadoxVoipRequest $request)
    {
        $input = $request->all();

        $discadoxVoip = $this->discadoxVoipRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/discadoxVoips.singular')]));

        return redirect(route('discadoxVoips.index'));
    }

    /**
     * Display the specified DiscadoxVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $discadoxVoip = $this->discadoxVoipRepository->find($id);

        if (empty($discadoxVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/discadoxVoips.singular')]));

            return redirect(route('discadoxVoips.index'));
        }

        return view('discadox_voips.show')->with('discadoxVoip', $discadoxVoip);
    }

    /**
     * Show the form for editing the specified DiscadoxVoip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $discadoxVoip = $this->discadoxVoipRepository->find($id);

        if (empty($discadoxVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/discadoxVoips.singular')]));

            return redirect(route('discadoxVoips.index'));
        }

        return view('discadox_voips.edit')->with('discadoxVoip', $discadoxVoip);
    }

    /**
     * Update the specified DiscadoxVoip in storage.
     *
     * @param int $id
     * @param UpdateDiscadoxVoipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiscadoxVoipRequest $request)
    {
        $discadoxVoip = $this->discadoxVoipRepository->find($id);

        if (empty($discadoxVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/discadoxVoips.singular')]));

            return redirect(route('discadoxVoips.index'));
        }

        $discadoxVoip = $this->discadoxVoipRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/discadoxVoips.singular')]));

        return redirect(route('discadoxVoips.index'));
    }

    /**
     * Remove the specified DiscadoxVoip from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $discadoxVoip = $this->discadoxVoipRepository->find($id);

        if (empty($discadoxVoip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/discadoxVoips.singular')]));

            return redirect(route('discadoxVoips.index'));
        }

        $this->discadoxVoipRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/discadoxVoips.singular')]));

        return redirect(route('discadoxVoips.index'));
    }
}
