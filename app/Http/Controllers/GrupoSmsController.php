<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrupoSmsRequest;
use App\Http\Requests\UpdateGrupoSmsRequest;
use App\Repositories\GrupoSmsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GrupoSmsController extends AppBaseController
{
    /** @var  GrupoSmsRepository */
    private $grupoSmsRepository;

    public function __construct(GrupoSmsRepository $grupoSmsRepo)
    {
        $this->grupoSmsRepository = $grupoSmsRepo;
    }

    /**
     * Display a listing of the GrupoSms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grupoSms = $this->grupoSmsRepository->all();

        return view('grupo_sms.index')
            ->with('grupoSms', $grupoSms);
    }

    /**
     * Show the form for creating a new GrupoSms.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupo_sms.create');
    }

    /**
     * Store a newly created GrupoSms in storage.
     *
     * @param CreateGrupoSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoSmsRequest $request)
    {
        $input = $request->all();

        $grupoSms = $this->grupoSmsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/grupoSms.singular')]));

        return redirect(route('grupoSms.index'));
    }

    /**
     * Display the specified GrupoSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoSms = $this->grupoSmsRepository->find($id);

        if (empty($grupoSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoSms.singular')]));

            return redirect(route('grupoSms.index'));
        }

        return view('grupo_sms.show')->with('grupoSms', $grupoSms);
    }

    /**
     * Show the form for editing the specified GrupoSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoSms = $this->grupoSmsRepository->find($id);

        if (empty($grupoSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoSms.singular')]));

            return redirect(route('grupoSms.index'));
        }

        return view('grupo_sms.edit')->with('grupoSms', $grupoSms);
    }

    /**
     * Update the specified GrupoSms in storage.
     *
     * @param int $id
     * @param UpdateGrupoSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoSmsRequest $request)
    {
        $grupoSms = $this->grupoSmsRepository->find($id);

        if (empty($grupoSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoSms.singular')]));

            return redirect(route('grupoSms.index'));
        }

        $grupoSms = $this->grupoSmsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/grupoSms.singular')]));

        return redirect(route('grupoSms.index'));
    }

    /**
     * Remove the specified GrupoSms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoSms = $this->grupoSmsRepository->find($id);

        if (empty($grupoSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/grupoSms.singular')]));

            return redirect(route('grupoSms.index'));
        }

        $this->grupoSmsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/grupoSms.singular')]));

        return redirect(route('grupoSms.index'));
    }
}
