<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnvioSmsRequest;
use App\Http\Requests\UpdateEnvioSmsRequest;
use App\Repositories\EnvioSmsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EnvioSmsController extends AppBaseController
{
    /** @var  EnvioSmsRepository */
    private $envioSmsRepository;

    public function __construct(EnvioSmsRepository $envioSmsRepo)
    {
        $this->envioSmsRepository = $envioSmsRepo;
    }

    /**
     * Display a listing of the EnvioSms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $envioSms = $this->envioSmsRepository->all();

        return view('envio_sms.index')
            ->with('envioSms', $envioSms);
    }

    /**
     * Show the form for creating a new EnvioSms.
     *
     * @return Response
     */
    public function create()
    {
        return view('envio_sms.create');
    }

    /**
     * Store a newly created EnvioSms in storage.
     *
     * @param CreateEnvioSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateEnvioSmsRequest $request)
    {
        $input = $request->all();

        $envioSms = $this->envioSmsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/envioSms.singular')]));

        return redirect(route('envioSms.index'));
    }

    /**
     * Display the specified EnvioSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $envioSms = $this->envioSmsRepository->find($id);

        if (empty($envioSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/envioSms.singular')]));

            return redirect(route('envioSms.index'));
        }

        return view('envio_sms.show')->with('envioSms', $envioSms);
    }

    /**
     * Show the form for editing the specified EnvioSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $envioSms = $this->envioSmsRepository->find($id);

        if (empty($envioSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/envioSms.singular')]));

            return redirect(route('envioSms.index'));
        }

        return view('envio_sms.edit')->with('envioSms', $envioSms);
    }

    /**
     * Update the specified EnvioSms in storage.
     *
     * @param int $id
     * @param UpdateEnvioSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnvioSmsRequest $request)
    {
        $envioSms = $this->envioSmsRepository->find($id);

        if (empty($envioSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/envioSms.singular')]));

            return redirect(route('envioSms.index'));
        }

        $envioSms = $this->envioSmsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/envioSms.singular')]));

        return redirect(route('envioSms.index'));
    }

    /**
     * Remove the specified EnvioSms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $envioSms = $this->envioSmsRepository->find($id);

        if (empty($envioSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/envioSms.singular')]));

            return redirect(route('envioSms.index'));
        }

        $this->envioSmsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/envioSms.singular')]));

        return redirect(route('envioSms.index'));
    }
}
