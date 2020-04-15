<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCadFeriadoRequest;
use App\Http\Requests\UpdateCadFeriadoRequest;
use App\Repositories\CadFeriadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CadFeriadoController extends AppBaseController
{
    /** @var  CadFeriadoRepository */
    private $cadFeriadoRepository;

    public function __construct(CadFeriadoRepository $cadFeriadoRepo)
    {
        $this->cadFeriadoRepository = $cadFeriadoRepo;
    }

    /**
     * Display a listing of the CadFeriado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cadFeriados = $this->cadFeriadoRepository->all();

        return view('cad_feriados.index')
            ->with('cadFeriados', $cadFeriados);
    }

    /**
     * Show the form for creating a new CadFeriado.
     *
     * @return Response
     */
    public function create()
    {
        return view('cad_feriados.create');
    }

    /**
     * Store a newly created CadFeriado in storage.
     *
     * @param CreateCadFeriadoRequest $request
     *
     * @return Response
     */
    public function store(CreateCadFeriadoRequest $request)
    {
        $input = $request->all();

        $cadFeriado = $this->cadFeriadoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cadFeriados.singular')]));

        return redirect(route('cadFeriados.index'));
    }

    /**
     * Display the specified CadFeriado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cadFeriado = $this->cadFeriadoRepository->find($id);

        if (empty($cadFeriado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cadFeriados.singular')]));

            return redirect(route('cadFeriados.index'));
        }

        return view('cad_feriados.show')->with('cadFeriado', $cadFeriado);
    }

    /**
     * Show the form for editing the specified CadFeriado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cadFeriado = $this->cadFeriadoRepository->find($id);

        if (empty($cadFeriado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cadFeriados.singular')]));

            return redirect(route('cadFeriados.index'));
        }

        return view('cad_feriados.edit')->with('cadFeriado', $cadFeriado);
    }

    /**
     * Update the specified CadFeriado in storage.
     *
     * @param int $id
     * @param UpdateCadFeriadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCadFeriadoRequest $request)
    {
        $cadFeriado = $this->cadFeriadoRepository->find($id);

        if (empty($cadFeriado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cadFeriados.singular')]));

            return redirect(route('cadFeriados.index'));
        }

        $cadFeriado = $this->cadFeriadoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cadFeriados.singular')]));

        return redirect(route('cadFeriados.index'));
    }

    /**
     * Remove the specified CadFeriado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cadFeriado = $this->cadFeriadoRepository->find($id);

        if (empty($cadFeriado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cadFeriados.singular')]));

            return redirect(route('cadFeriados.index'));
        }

        $this->cadFeriadoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cadFeriados.singular')]));

        return redirect(route('cadFeriados.index'));
    }
}
