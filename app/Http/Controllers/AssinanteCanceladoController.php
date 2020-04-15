<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssinanteCanceladoRequest;
use App\Http\Requests\UpdateAssinanteCanceladoRequest;
use App\Repositories\AssinanteCanceladoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssinanteCanceladoController extends AppBaseController
{
    /** @var  AssinanteCanceladoRepository */
    private $assinanteCanceladoRepository;

    public function __construct(AssinanteCanceladoRepository $assinanteCanceladoRepo)
    {
        $this->assinanteCanceladoRepository = $assinanteCanceladoRepo;
    }

    /**
     * Display a listing of the AssinanteCancelado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assinanteCancelados = $this->assinanteCanceladoRepository->all();

        return view('assinante_cancelados.index')
            ->with('assinanteCancelados', $assinanteCancelados);
    }

    /**
     * Show the form for creating a new AssinanteCancelado.
     *
     * @return Response
     */
    public function create()
    {
        return view('assinante_cancelados.create');
    }

    /**
     * Store a newly created AssinanteCancelado in storage.
     *
     * @param CreateAssinanteCanceladoRequest $request
     *
     * @return Response
     */
    public function store(CreateAssinanteCanceladoRequest $request)
    {
        $input = $request->all();

        $assinanteCancelado = $this->assinanteCanceladoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/assinanteCancelados.singular')]));

        return redirect(route('assinanteCancelados.index'));
    }

    /**
     * Display the specified AssinanteCancelado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assinanteCancelado = $this->assinanteCanceladoRepository->find($id);

        if (empty($assinanteCancelado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancelados.singular')]));

            return redirect(route('assinanteCancelados.index'));
        }

        return view('assinante_cancelados.show')->with('assinanteCancelado', $assinanteCancelado);
    }

    /**
     * Show the form for editing the specified AssinanteCancelado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assinanteCancelado = $this->assinanteCanceladoRepository->find($id);

        if (empty($assinanteCancelado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancelados.singular')]));

            return redirect(route('assinanteCancelados.index'));
        }

        return view('assinante_cancelados.edit')->with('assinanteCancelado', $assinanteCancelado);
    }

    /**
     * Update the specified AssinanteCancelado in storage.
     *
     * @param int $id
     * @param UpdateAssinanteCanceladoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssinanteCanceladoRequest $request)
    {
        $assinanteCancelado = $this->assinanteCanceladoRepository->find($id);

        if (empty($assinanteCancelado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancelados.singular')]));

            return redirect(route('assinanteCancelados.index'));
        }

        $assinanteCancelado = $this->assinanteCanceladoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/assinanteCancelados.singular')]));

        return redirect(route('assinanteCancelados.index'));
    }

    /**
     * Remove the specified AssinanteCancelado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assinanteCancelado = $this->assinanteCanceladoRepository->find($id);

        if (empty($assinanteCancelado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinanteCancelados.singular')]));

            return redirect(route('assinanteCancelados.index'));
        }

        $this->assinanteCanceladoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/assinanteCancelados.singular')]));

        return redirect(route('assinanteCancelados.index'));
    }
}
