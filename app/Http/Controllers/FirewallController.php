<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFirewallRequest;
use App\Http\Requests\UpdateFirewallRequest;
use App\Repositories\FirewallRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FirewallController extends AppBaseController
{
    /** @var  FirewallRepository */
    private $firewallRepository;

    public function __construct(FirewallRepository $firewallRepo)
    {
        $this->firewallRepository = $firewallRepo;
    }

    /**
     * Display a listing of the Firewall.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $firewalls = $this->firewallRepository->all();

        return view('firewalls.index')
            ->with('firewalls', $firewalls);
    }

    /**
     * Show the form for creating a new Firewall.
     *
     * @return Response
     */
    public function create()
    {
        return view('firewalls.create');
    }

    /**
     * Store a newly created Firewall in storage.
     *
     * @param CreateFirewallRequest $request
     *
     * @return Response
     */
    public function store(CreateFirewallRequest $request)
    {
        $input = $request->all();

        $firewall = $this->firewallRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/firewalls.singular')]));

        return redirect(route('firewalls.index'));
    }

    /**
     * Display the specified Firewall.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $firewall = $this->firewallRepository->find($id);

        if (empty($firewall)) {
            Flash::error(__('messages.not_found', ['model' => __('models/firewalls.singular')]));

            return redirect(route('firewalls.index'));
        }

        return view('firewalls.show')->with('firewall', $firewall);
    }

    /**
     * Show the form for editing the specified Firewall.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $firewall = $this->firewallRepository->find($id);

        if (empty($firewall)) {
            Flash::error(__('messages.not_found', ['model' => __('models/firewalls.singular')]));

            return redirect(route('firewalls.index'));
        }

        return view('firewalls.edit')->with('firewall', $firewall);
    }

    /**
     * Update the specified Firewall in storage.
     *
     * @param int $id
     * @param UpdateFirewallRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFirewallRequest $request)
    {
        $firewall = $this->firewallRepository->find($id);

        if (empty($firewall)) {
            Flash::error(__('messages.not_found', ['model' => __('models/firewalls.singular')]));

            return redirect(route('firewalls.index'));
        }

        $firewall = $this->firewallRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/firewalls.singular')]));

        return redirect(route('firewalls.index'));
    }

    /**
     * Remove the specified Firewall from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $firewall = $this->firewallRepository->find($id);

        if (empty($firewall)) {
            Flash::error(__('messages.not_found', ['model' => __('models/firewalls.singular')]));

            return redirect(route('firewalls.index'));
        }

        $this->firewallRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/firewalls.singular')]));

        return redirect(route('firewalls.index'));
    }
}
