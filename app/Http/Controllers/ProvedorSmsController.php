<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProvedorSmsRequest;
use App\Http\Requests\UpdateProvedorSmsRequest;
use App\Repositories\ProvedorSmsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProvedorSmsController extends AppBaseController
{
    /** @var  ProvedorSmsRepository */
    private $provedorSmsRepository;

    public function __construct(ProvedorSmsRepository $provedorSmsRepo)
    {
        $this->provedorSmsRepository = $provedorSmsRepo;
    }

    /**
     * Display a listing of the ProvedorSms.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $provedorSms = $this->provedorSmsRepository->all();

        return view('provedor_sms.index')
            ->with('provedorSms', $provedorSms);
    }

    /**
     * Show the form for creating a new ProvedorSms.
     *
     * @return Response
     */
    public function create()
    {
        return view('provedor_sms.create');
    }

    /**
     * Store a newly created ProvedorSms in storage.
     *
     * @param CreateProvedorSmsRequest $request
     *
     * @return Response
     */
    public function store(CreateProvedorSmsRequest $request)
    {
        $input = $request->all();

        $provedorSms = $this->provedorSmsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/provedorSms.singular')]));

        return redirect(route('provedorSms.index'));
    }

    /**
     * Display the specified ProvedorSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $provedorSms = $this->provedorSmsRepository->find($id);

        if (empty($provedorSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/provedorSms.singular')]));

            return redirect(route('provedorSms.index'));
        }

        return view('provedor_sms.show')->with('provedorSms', $provedorSms);
    }

    /**
     * Show the form for editing the specified ProvedorSms.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $provedorSms = $this->provedorSmsRepository->find($id);

        if (empty($provedorSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/provedorSms.singular')]));

            return redirect(route('provedorSms.index'));
        }

        return view('provedor_sms.edit')->with('provedorSms', $provedorSms);
    }

    /**
     * Update the specified ProvedorSms in storage.
     *
     * @param int $id
     * @param UpdateProvedorSmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProvedorSmsRequest $request)
    {
        $provedorSms = $this->provedorSmsRepository->find($id);

        if (empty($provedorSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/provedorSms.singular')]));

            return redirect(route('provedorSms.index'));
        }

        $provedorSms = $this->provedorSmsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/provedorSms.singular')]));

        return redirect(route('provedorSms.index'));
    }

    /**
     * Remove the specified ProvedorSms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $provedorSms = $this->provedorSmsRepository->find($id);

        if (empty($provedorSms)) {
            Flash::error(__('messages.not_found', ['model' => __('models/provedorSms.singular')]));

            return redirect(route('provedorSms.index'));
        }

        $this->provedorSmsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/provedorSms.singular')]));

        return redirect(route('provedorSms.index'));
    }
}
