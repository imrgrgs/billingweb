<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgentexUserRequest;
use App\Http\Requests\UpdateAgentexUserRequest;
use App\Repositories\AgentexUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AgentexUserController extends AppBaseController
{
    /** @var  AgentexUserRepository */
    private $agentexUserRepository;

    public function __construct(AgentexUserRepository $agentexUserRepo)
    {
        $this->agentexUserRepository = $agentexUserRepo;
    }

    /**
     * Display a listing of the AgentexUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $agentexUsers = $this->agentexUserRepository->all();

        return view('agentex_users.index')
            ->with('agentexUsers', $agentexUsers);
    }

    /**
     * Show the form for creating a new AgentexUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('agentex_users.create');
    }

    /**
     * Store a newly created AgentexUser in storage.
     *
     * @param CreateAgentexUserRequest $request
     *
     * @return Response
     */
    public function store(CreateAgentexUserRequest $request)
    {
        $input = $request->all();

        $agentexUser = $this->agentexUserRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/agentexUsers.singular')]));

        return redirect(route('agentexUsers.index'));
    }

    /**
     * Display the specified AgentexUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $agentexUser = $this->agentexUserRepository->find($id);

        if (empty($agentexUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentexUsers.singular')]));

            return redirect(route('agentexUsers.index'));
        }

        return view('agentex_users.show')->with('agentexUser', $agentexUser);
    }

    /**
     * Show the form for editing the specified AgentexUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $agentexUser = $this->agentexUserRepository->find($id);

        if (empty($agentexUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentexUsers.singular')]));

            return redirect(route('agentexUsers.index'));
        }

        return view('agentex_users.edit')->with('agentexUser', $agentexUser);
    }

    /**
     * Update the specified AgentexUser in storage.
     *
     * @param int $id
     * @param UpdateAgentexUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgentexUserRequest $request)
    {
        $agentexUser = $this->agentexUserRepository->find($id);

        if (empty($agentexUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentexUsers.singular')]));

            return redirect(route('agentexUsers.index'));
        }

        $agentexUser = $this->agentexUserRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/agentexUsers.singular')]));

        return redirect(route('agentexUsers.index'));
    }

    /**
     * Remove the specified AgentexUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $agentexUser = $this->agentexUserRepository->find($id);

        if (empty($agentexUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/agentexUsers.singular')]));

            return redirect(route('agentexUsers.index'));
        }

        $this->agentexUserRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/agentexUsers.singular')]));

        return redirect(route('agentexUsers.index'));
    }
}
