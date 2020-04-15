<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCreditoRequest;
use App\Http\Requests\UpdateCreditoRequest;
use App\Repositories\CreditoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CreditoController extends AppBaseController
{
    /** @var  CreditoRepository */
    private $creditoRepository;

    public function __construct(CreditoRepository $creditoRepo)
    {
        $this->creditoRepository = $creditoRepo;
    }

    /**
     * Display a listing of the Credito.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $creditos = $this->creditoRepository->all();

        return view('creditos.index')
            ->with('creditos', $creditos);
    }

    /**
     * Show the form for creating a new Credito.
     *
     * @return Response
     */
    public function create()
    {
        return view('creditos.create');
    }

    /**
     * Store a newly created Credito in storage.
     *
     * @param CreateCreditoRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditoRequest $request)
    {
        $input = $request->all();

        $credito = $this->creditoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/creditos.singular')]));

        return redirect(route('creditos.index'));
    }

    /**
     * Display the specified Credito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditos.singular')]));

            return redirect(route('creditos.index'));
        }

        return view('creditos.show')->with('credito', $credito);
    }

    /**
     * Show the form for editing the specified Credito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditos.singular')]));

            return redirect(route('creditos.index'));
        }

        return view('creditos.edit')->with('credito', $credito);
    }

    /**
     * Update the specified Credito in storage.
     *
     * @param int $id
     * @param UpdateCreditoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditoRequest $request)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditos.singular')]));

            return redirect(route('creditos.index'));
        }

        $credito = $this->creditoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/creditos.singular')]));

        return redirect(route('creditos.index'));
    }

    /**
     * Remove the specified Credito from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $credito = $this->creditoRepository->find($id);

        if (empty($credito)) {
            Flash::error(__('messages.not_found', ['model' => __('models/creditos.singular')]));

            return redirect(route('creditos.index'));
        }

        $this->creditoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/creditos.singular')]));

        return redirect(route('creditos.index'));
    }
}
