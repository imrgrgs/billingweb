<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabelaRepRequest;
use App\Http\Requests\UpdateTabelaRepRequest;
use App\Repositories\TabelaRepRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TabelaRepController extends AppBaseController
{
    /** @var  TabelaRepRepository */
    private $tabelaRepRepository;

    public function __construct(TabelaRepRepository $tabelaRepRepo)
    {
        $this->tabelaRepRepository = $tabelaRepRepo;
    }

    /**
     * Display a listing of the TabelaRep.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tabelaReps = $this->tabelaRepRepository->all();

        return view('tabela_reps.index')
            ->with('tabelaReps', $tabelaReps);
    }

    /**
     * Show the form for creating a new TabelaRep.
     *
     * @return Response
     */
    public function create()
    {
        return view('tabela_reps.create');
    }

    /**
     * Store a newly created TabelaRep in storage.
     *
     * @param CreateTabelaRepRequest $request
     *
     * @return Response
     */
    public function store(CreateTabelaRepRequest $request)
    {
        $input = $request->all();

        $tabelaRep = $this->tabelaRepRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tabelaReps.singular')]));

        return redirect(route('tabelaReps.index'));
    }

    /**
     * Display the specified TabelaRep.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabelaRep = $this->tabelaRepRepository->find($id);

        if (empty($tabelaRep)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabelaReps.singular')]));

            return redirect(route('tabelaReps.index'));
        }

        return view('tabela_reps.show')->with('tabelaRep', $tabelaRep);
    }

    /**
     * Show the form for editing the specified TabelaRep.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabelaRep = $this->tabelaRepRepository->find($id);

        if (empty($tabelaRep)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabelaReps.singular')]));

            return redirect(route('tabelaReps.index'));
        }

        return view('tabela_reps.edit')->with('tabelaRep', $tabelaRep);
    }

    /**
     * Update the specified TabelaRep in storage.
     *
     * @param int $id
     * @param UpdateTabelaRepRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTabelaRepRequest $request)
    {
        $tabelaRep = $this->tabelaRepRepository->find($id);

        if (empty($tabelaRep)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabelaReps.singular')]));

            return redirect(route('tabelaReps.index'));
        }

        $tabelaRep = $this->tabelaRepRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tabelaReps.singular')]));

        return redirect(route('tabelaReps.index'));
    }

    /**
     * Remove the specified TabelaRep from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabelaRep = $this->tabelaRepRepository->find($id);

        if (empty($tabelaRep)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabelaReps.singular')]));

            return redirect(route('tabelaReps.index'));
        }

        $this->tabelaRepRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tabelaReps.singular')]));

        return redirect(route('tabelaReps.index'));
    }
}
