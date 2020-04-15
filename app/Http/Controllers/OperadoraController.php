<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOperadoraRequest;
use App\Http\Requests\UpdateOperadoraRequest;
use App\Repositories\OperadoraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OperadoraController extends AppBaseController
{
    /** @var  OperadoraRepository */
    private $operadoraRepository;

    public function __construct(OperadoraRepository $operadoraRepo)
    {
        $this->operadoraRepository = $operadoraRepo;
    }

    /**
     * Display a listing of the Operadora.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $operadoras = $this->operadoraRepository->all();

        return view('operadoras.index')
            ->with('operadoras', $operadoras);
    }

    /**
     * Show the form for creating a new Operadora.
     *
     * @return Response
     */
    public function create()
    {
        return view('operadoras.create');
    }

    /**
     * Store a newly created Operadora in storage.
     *
     * @param CreateOperadoraRequest $request
     *
     * @return Response
     */
    public function store(CreateOperadoraRequest $request)
    {
        $input = $request->all();

        $operadora = $this->operadoraRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/operadoras.singular')]));

        return redirect(route('operadoras.index'));
    }

    /**
     * Display the specified Operadora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $operadora = $this->operadoraRepository->find($id);

        if (empty($operadora)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operadoras.singular')]));

            return redirect(route('operadoras.index'));
        }

        return view('operadoras.show')->with('operadora', $operadora);
    }

    /**
     * Show the form for editing the specified Operadora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $operadora = $this->operadoraRepository->find($id);

        if (empty($operadora)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operadoras.singular')]));

            return redirect(route('operadoras.index'));
        }

        return view('operadoras.edit')->with('operadora', $operadora);
    }

    /**
     * Update the specified Operadora in storage.
     *
     * @param int $id
     * @param UpdateOperadoraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOperadoraRequest $request)
    {
        $operadora = $this->operadoraRepository->find($id);

        if (empty($operadora)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operadoras.singular')]));

            return redirect(route('operadoras.index'));
        }

        $operadora = $this->operadoraRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/operadoras.singular')]));

        return redirect(route('operadoras.index'));
    }

    /**
     * Remove the specified Operadora from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $operadora = $this->operadoraRepository->find($id);

        if (empty($operadora)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operadoras.singular')]));

            return redirect(route('operadoras.index'));
        }

        $this->operadoraRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/operadoras.singular')]));

        return redirect(route('operadoras.index'));
    }
}
