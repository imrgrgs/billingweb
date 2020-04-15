<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSipBuddieRequest;
use App\Http\Requests\UpdateSipBuddieRequest;
use App\Repositories\SipBuddieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SipBuddieController extends AppBaseController
{
    /** @var  SipBuddieRepository */
    private $sipBuddieRepository;

    public function __construct(SipBuddieRepository $sipBuddieRepo)
    {
        $this->sipBuddieRepository = $sipBuddieRepo;
    }

    /**
     * Display a listing of the SipBuddie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sipBuddies = $this->sipBuddieRepository->all();

        return view('sip_buddies.index')
            ->with('sipBuddies', $sipBuddies);
    }

    /**
     * Show the form for creating a new SipBuddie.
     *
     * @return Response
     */
    public function create()
    {
        return view('sip_buddies.create');
    }

    /**
     * Store a newly created SipBuddie in storage.
     *
     * @param CreateSipBuddieRequest $request
     *
     * @return Response
     */
    public function store(CreateSipBuddieRequest $request)
    {
        $input = $request->all();

        $sipBuddie = $this->sipBuddieRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/sipBuddies.singular')]));

        return redirect(route('sipBuddies.index'));
    }

    /**
     * Display the specified SipBuddie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sipBuddie = $this->sipBuddieRepository->find($id);

        if (empty($sipBuddie)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sipBuddies.singular')]));

            return redirect(route('sipBuddies.index'));
        }

        return view('sip_buddies.show')->with('sipBuddie', $sipBuddie);
    }

    /**
     * Show the form for editing the specified SipBuddie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sipBuddie = $this->sipBuddieRepository->find($id);

        if (empty($sipBuddie)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sipBuddies.singular')]));

            return redirect(route('sipBuddies.index'));
        }

        return view('sip_buddies.edit')->with('sipBuddie', $sipBuddie);
    }

    /**
     * Update the specified SipBuddie in storage.
     *
     * @param int $id
     * @param UpdateSipBuddieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSipBuddieRequest $request)
    {
        $sipBuddie = $this->sipBuddieRepository->find($id);

        if (empty($sipBuddie)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sipBuddies.singular')]));

            return redirect(route('sipBuddies.index'));
        }

        $sipBuddie = $this->sipBuddieRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/sipBuddies.singular')]));

        return redirect(route('sipBuddies.index'));
    }

    /**
     * Remove the specified SipBuddie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sipBuddie = $this->sipBuddieRepository->find($id);

        if (empty($sipBuddie)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sipBuddies.singular')]));

            return redirect(route('sipBuddies.index'));
        }

        $this->sipBuddieRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/sipBuddies.singular')]));

        return redirect(route('sipBuddies.index'));
    }
}
