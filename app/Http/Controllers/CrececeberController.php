<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrececeberRequest;
use App\Http\Requests\UpdateCrececeberRequest;
use App\Repositories\CrececeberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CrececeberController extends AppBaseController
{
    /** @var  CrececeberRepository */
    private $crececeberRepository;

    public function __construct(CrececeberRepository $crececeberRepo)
    {
        $this->crececeberRepository = $crececeberRepo;
    }

    /**
     * Display a listing of the Crececeber.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $crececebers = $this->crececeberRepository->all();

        return view('crececebers.index')
            ->with('crececebers', $crececebers);
    }

    /**
     * Show the form for creating a new Crececeber.
     *
     * @return Response
     */
    public function create()
    {
        return view('crececebers.create');
    }

    /**
     * Store a newly created Crececeber in storage.
     *
     * @param CreateCrececeberRequest $request
     *
     * @return Response
     */
    public function store(CreateCrececeberRequest $request)
    {
        $input = $request->all();

        $crececeber = $this->crececeberRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/crececebers.singular')]));

        return redirect(route('crececebers.index'));
    }

    /**
     * Display the specified Crececeber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crececeber = $this->crececeberRepository->find($id);

        if (empty($crececeber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crececebers.singular')]));

            return redirect(route('crececebers.index'));
        }

        return view('crececebers.show')->with('crececeber', $crececeber);
    }

    /**
     * Show the form for editing the specified Crececeber.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crececeber = $this->crececeberRepository->find($id);

        if (empty($crececeber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crececebers.singular')]));

            return redirect(route('crececebers.index'));
        }

        return view('crececebers.edit')->with('crececeber', $crececeber);
    }

    /**
     * Update the specified Crececeber in storage.
     *
     * @param int $id
     * @param UpdateCrececeberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrececeberRequest $request)
    {
        $crececeber = $this->crececeberRepository->find($id);

        if (empty($crececeber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crececebers.singular')]));

            return redirect(route('crececebers.index'));
        }

        $crececeber = $this->crececeberRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/crececebers.singular')]));

        return redirect(route('crececebers.index'));
    }

    /**
     * Remove the specified Crececeber from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crececeber = $this->crececeberRepository->find($id);

        if (empty($crececeber)) {
            Flash::error(__('messages.not_found', ['model' => __('models/crececebers.singular')]));

            return redirect(route('crececebers.index'));
        }

        $this->crececeberRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/crececebers.singular')]));

        return redirect(route('crececebers.index'));
    }
}
