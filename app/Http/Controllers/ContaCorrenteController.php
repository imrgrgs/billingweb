<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContaCorrenteRequest;
use App\Http\Requests\UpdateContaCorrenteRequest;
use App\Repositories\ContaCorrenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContaCorrenteController extends AppBaseController
{
    /** @var  ContaCorrenteRepository */
    private $contaCorrenteRepository;

    public function __construct(ContaCorrenteRepository $contaCorrenteRepo)
    {
        $this->contaCorrenteRepository = $contaCorrenteRepo;
    }

    /**
     * Display a listing of the ContaCorrente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contaCorrentes = $this->contaCorrenteRepository->all();

        return view('conta_correntes.index')
            ->with('contaCorrentes', $contaCorrentes);
    }

    /**
     * Show the form for creating a new ContaCorrente.
     *
     * @return Response
     */
    public function create()
    {
        return view('conta_correntes.create');
    }

    /**
     * Store a newly created ContaCorrente in storage.
     *
     * @param CreateContaCorrenteRequest $request
     *
     * @return Response
     */
    public function store(CreateContaCorrenteRequest $request)
    {
        $input = $request->all();

        $contaCorrente = $this->contaCorrenteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contaCorrentes.singular')]));

        return redirect(route('contaCorrentes.index'));
    }

    /**
     * Display the specified ContaCorrente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contaCorrente = $this->contaCorrenteRepository->find($id);

        if (empty($contaCorrente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contaCorrentes.singular')]));

            return redirect(route('contaCorrentes.index'));
        }

        return view('conta_correntes.show')->with('contaCorrente', $contaCorrente);
    }

    /**
     * Show the form for editing the specified ContaCorrente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contaCorrente = $this->contaCorrenteRepository->find($id);

        if (empty($contaCorrente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contaCorrentes.singular')]));

            return redirect(route('contaCorrentes.index'));
        }

        return view('conta_correntes.edit')->with('contaCorrente', $contaCorrente);
    }

    /**
     * Update the specified ContaCorrente in storage.
     *
     * @param int $id
     * @param UpdateContaCorrenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContaCorrenteRequest $request)
    {
        $contaCorrente = $this->contaCorrenteRepository->find($id);

        if (empty($contaCorrente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contaCorrentes.singular')]));

            return redirect(route('contaCorrentes.index'));
        }

        $contaCorrente = $this->contaCorrenteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contaCorrentes.singular')]));

        return redirect(route('contaCorrentes.index'));
    }

    /**
     * Remove the specified ContaCorrente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contaCorrente = $this->contaCorrenteRepository->find($id);

        if (empty($contaCorrente)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contaCorrentes.singular')]));

            return redirect(route('contaCorrentes.index'));
        }

        $this->contaCorrenteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contaCorrentes.singular')]));

        return redirect(route('contaCorrentes.index'));
    }
}
