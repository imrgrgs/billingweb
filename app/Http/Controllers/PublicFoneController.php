<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicFoneRequest;
use App\Http\Requests\UpdatePublicFoneRequest;
use App\Repositories\PublicFoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PublicFoneController extends AppBaseController
{
    /** @var  PublicFoneRepository */
    private $publicFoneRepository;

    public function __construct(PublicFoneRepository $publicFoneRepo)
    {
        $this->publicFoneRepository = $publicFoneRepo;
    }

    /**
     * Display a listing of the PublicFone.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $publicFones = $this->publicFoneRepository->all();

        return view('public_fones.index')
            ->with('publicFones', $publicFones);
    }

    /**
     * Show the form for creating a new PublicFone.
     *
     * @return Response
     */
    public function create()
    {
        return view('public_fones.create');
    }

    /**
     * Store a newly created PublicFone in storage.
     *
     * @param CreatePublicFoneRequest $request
     *
     * @return Response
     */
    public function store(CreatePublicFoneRequest $request)
    {
        $input = $request->all();

        $publicFone = $this->publicFoneRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/publicFones.singular')]));

        return redirect(route('publicFones.index'));
    }

    /**
     * Display the specified PublicFone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publicFone = $this->publicFoneRepository->find($id);

        if (empty($publicFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicFones.singular')]));

            return redirect(route('publicFones.index'));
        }

        return view('public_fones.show')->with('publicFone', $publicFone);
    }

    /**
     * Show the form for editing the specified PublicFone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publicFone = $this->publicFoneRepository->find($id);

        if (empty($publicFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicFones.singular')]));

            return redirect(route('publicFones.index'));
        }

        return view('public_fones.edit')->with('publicFone', $publicFone);
    }

    /**
     * Update the specified PublicFone in storage.
     *
     * @param int $id
     * @param UpdatePublicFoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePublicFoneRequest $request)
    {
        $publicFone = $this->publicFoneRepository->find($id);

        if (empty($publicFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicFones.singular')]));

            return redirect(route('publicFones.index'));
        }

        $publicFone = $this->publicFoneRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/publicFones.singular')]));

        return redirect(route('publicFones.index'));
    }

    /**
     * Remove the specified PublicFone from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publicFone = $this->publicFoneRepository->find($id);

        if (empty($publicFone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicFones.singular')]));

            return redirect(route('publicFones.index'));
        }

        $this->publicFoneRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/publicFones.singular')]));

        return redirect(route('publicFones.index'));
    }
}
