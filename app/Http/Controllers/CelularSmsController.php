<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCelularSmsRequest;
use App\Http\Requests\UpdateCelularSmsRequest;
use App\Repositories\CelularSmsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CelularSmsController extends AppBaseController
{
    /** @var  CelularSmsRepository */
    private $celularSmsRepository;

    public function __construct(CelularSmsRepository $celularSmsRepo)
    {
        $this->celularSmsRepository = $celularSmsRepo;
    }

    /**
     * Display a listing of the CelularSms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $celularSms = $this->celularSmsRepository->all();

        return view('celular_sms.index')
            ->with('celularSms', $celularSms);
    }

    /**
     * Show the form for creating a new CelularSms.
     *
     * @return Response
     */
    public function create()
    {
        return view('celular_sms.create');
    }

    /**
     * Store a newly created CelularSms in storage.
     *
     * @param CreateCelularSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateCelularSmsRequest $request)
    {
        $input = $request->all();

        $celularSms = $this->celularSmsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/celularSms.singular')]));

        return redirect(route('celularSms.index'));
    }

    /**
     * Display the specified CelularSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $celularSms = $this->celularSmsRepository->find($id);

        if (empty($celularSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/celularSms.singular')]));

            return redirect(route('celularSms.index'));
        }

        return view('celular_sms.show')->with('celularSms', $celularSms);
    }

    /**
     * Show the form for editing the specified CelularSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $celularSms = $this->celularSmsRepository->find($id);

        if (empty($celularSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/celularSms.singular')]));

            return redirect(route('celularSms.index'));
        }

        return view('celular_sms.edit')->with('celularSms', $celularSms);
    }

    /**
     * Update the specified CelularSms in storage.
     *
     * @param int $id
     * @param UpdateCelularSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCelularSmsRequest $request)
    {
        $celularSms = $this->celularSmsRepository->find($id);

        if (empty($celularSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/celularSms.singular')]));

            return redirect(route('celularSms.index'));
        }

        $celularSms = $this->celularSmsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/celularSms.singular')]));

        return redirect(route('celularSms.index'));
    }

    /**
     * Remove the specified CelularSms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $celularSms = $this->celularSmsRepository->find($id);

        if (empty($celularSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/celularSms.singular')]));

            return redirect(route('celularSms.index'));
        }

        $this->celularSmsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/celularSms.singular')]));

        return redirect(route('celularSms.index'));
    }
}
