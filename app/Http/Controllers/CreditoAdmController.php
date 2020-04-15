<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCreditoAdmRequest;
use App\Http\Requests\UpdateCreditoAdmRequest;
use App\Repositories\CreditoAdmRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CreditoAdmController extends AppBaseController
{
    /** @var  CreditoAdmRepository */
    private $creditoAdmRepository;

    public function __construct(CreditoAdmRepository $creditoAdmRepo)
    {
        $this->creditoAdmRepository = $creditoAdmRepo;
    }

    /**
     * Display a listing of the CreditoAdm.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $creditoAdms = $this->creditoAdmRepository->all();

        return view('credito_adms.index')
            ->with('creditoAdms', $creditoAdms);
    }

    /**
     * Show the form for creating a new CreditoAdm.
     *
     * @return Response
     */
    public function create()
    {
        return view('credito_adms.create');
    }

    /**
     * Store a newly created CreditoAdm in storage.
     *
     * @param CreateCreditoAdmRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditoAdmRequest $request)
    {
        $input = $request->all();

        $creditoAdm = $this->creditoAdmRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/creditoAdms.singular')]));

        return redirect(route('creditoAdms.index'));
    }

    /**
     * Display the specified CreditoAdm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditoAdm = $this->creditoAdmRepository->find($id);

        if (empty($creditoAdm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditoAdms.singular')]));

            return redirect(route('creditoAdms.index'));
        }

        return view('credito_adms.show')->with('creditoAdm', $creditoAdm);
    }

    /**
     * Show the form for editing the specified CreditoAdm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditoAdm = $this->creditoAdmRepository->find($id);

        if (empty($creditoAdm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditoAdms.singular')]));

            return redirect(route('creditoAdms.index'));
        }

        return view('credito_adms.edit')->with('creditoAdm', $creditoAdm);
    }

    /**
     * Update the specified CreditoAdm in storage.
     *
     * @param int $id
     * @param UpdateCreditoAdmRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditoAdmRequest $request)
    {
        $creditoAdm = $this->creditoAdmRepository->find($id);

        if (empty($creditoAdm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditoAdms.singular')]));

            return redirect(route('creditoAdms.index'));
        }

        $creditoAdm = $this->creditoAdmRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/creditoAdms.singular')]));

        return redirect(route('creditoAdms.index'));
    }

    /**
     * Remove the specified CreditoAdm from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditoAdm = $this->creditoAdmRepository->find($id);

        if (empty($creditoAdm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditoAdms.singular')]));

            return redirect(route('creditoAdms.index'));
        }

        $this->creditoAdmRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/creditoAdms.singular')]));

        return redirect(route('creditoAdms.index'));
    }
}
