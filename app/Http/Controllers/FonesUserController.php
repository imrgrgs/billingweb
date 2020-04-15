<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonesUserRequest;
use App\Http\Requests\UpdateFonesUserRequest;
use App\Repositories\FonesUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FonesUserController extends AppBaseController
{
    /** @var  FonesUserRepository */
    private $fonesUserRepository;

    public function __construct(FonesUserRepository $fonesUserRepo)
    {
        $this->fonesUserRepository = $fonesUserRepo;
    }

    /**
     * Display a listing of the FonesUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fonesUsers = $this->fonesUserRepository->all();

        return view('fones_users.index')
            ->with('fonesUsers', $fonesUsers);
    }

    /**
     * Show the form for creating a new FonesUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('fones_users.create');
    }

    /**
     * Store a newly created FonesUser in storage.
     *
     * @param CreateFonesUserRequest $request
     *
     * @return Response
     */
    public function store(CreateFonesUserRequest $request)
    {
        $input = $request->all();

        $fonesUser = $this->fonesUserRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fonesUsers.singular')]));

        return redirect(route('fonesUsers.index'));
    }

    /**
     * Display the specified FonesUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fonesUser = $this->fonesUserRepository->find($id);

        if (empty($fonesUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesUsers.singular')]));

            return redirect(route('fonesUsers.index'));
        }

        return view('fones_users.show')->with('fonesUser', $fonesUser);
    }

    /**
     * Show the form for editing the specified FonesUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fonesUser = $this->fonesUserRepository->find($id);

        if (empty($fonesUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesUsers.singular')]));

            return redirect(route('fonesUsers.index'));
        }

        return view('fones_users.edit')->with('fonesUser', $fonesUser);
    }

    /**
     * Update the specified FonesUser in storage.
     *
     * @param int $id
     * @param UpdateFonesUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFonesUserRequest $request)
    {
        $fonesUser = $this->fonesUserRepository->find($id);

        if (empty($fonesUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesUsers.singular')]));

            return redirect(route('fonesUsers.index'));
        }

        $fonesUser = $this->fonesUserRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fonesUsers.singular')]));

        return redirect(route('fonesUsers.index'));
    }

    /**
     * Remove the specified FonesUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fonesUser = $this->fonesUserRepository->find($id);

        if (empty($fonesUser)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesUsers.singular')]));

            return redirect(route('fonesUsers.index'));
        }

        $this->fonesUserRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fonesUsers.singular')]));

        return redirect(route('fonesUsers.index'));
    }
}
