<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSaldoGeralRequest;
use App\Http\Requests\UpdateSaldoGeralRequest;
use App\Repositories\SaldoGeralRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SaldoGeralController extends AppBaseController
{
    /** @var  SaldoGeralRepository */
    private $saldoGeralRepository;

    public function __construct(SaldoGeralRepository $saldoGeralRepo)
    {
        $this->saldoGeralRepository = $saldoGeralRepo;
    }

    /**
     * Display a listing of the SaldoGeral.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $saldoGerals = $this->saldoGeralRepository->all();

        return view('saldo_gerals.index')
            ->with('saldoGerals', $saldoGerals);
    }

    /**
     * Show the form for creating a new SaldoGeral.
     *
     * @return Response
     */
    public function create()
    {
        return view('saldo_gerals.create');
    }

    /**
     * Store a newly created SaldoGeral in storage.
     *
     * @param CreateSaldoGeralRequest $request
     *
     * @return Response
     */
    public function store(CreateSaldoGeralRequest $request)
    {
        $input = $request->all();

        $saldoGeral = $this->saldoGeralRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/saldoGerals.singular')]));

        return redirect(route('saldoGerals.index'));
    }

    /**
     * Display the specified SaldoGeral.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $saldoGeral = $this->saldoGeralRepository->find($id);

        if (empty($saldoGeral)) {
            Flash::error(__('messages.not_found', ['model' => __('models/saldoGerals.singular')]));

            return redirect(route('saldoGerals.index'));
        }

        return view('saldo_gerals.show')->with('saldoGeral', $saldoGeral);
    }

    /**
     * Show the form for editing the specified SaldoGeral.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $saldoGeral = $this->saldoGeralRepository->find($id);

        if (empty($saldoGeral)) {
            Flash::error(__('messages.not_found', ['model' => __('models/saldoGerals.singular')]));

            return redirect(route('saldoGerals.index'));
        }

        return view('saldo_gerals.edit')->with('saldoGeral', $saldoGeral);
    }

    /**
     * Update the specified SaldoGeral in storage.
     *
     * @param int $id
     * @param UpdateSaldoGeralRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSaldoGeralRequest $request)
    {
        $saldoGeral = $this->saldoGeralRepository->find($id);

        if (empty($saldoGeral)) {
            Flash::error(__('messages.not_found', ['model' => __('models/saldoGerals.singular')]));

            return redirect(route('saldoGerals.index'));
        }

        $saldoGeral = $this->saldoGeralRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/saldoGerals.singular')]));

        return redirect(route('saldoGerals.index'));
    }

    /**
     * Remove the specified SaldoGeral from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $saldoGeral = $this->saldoGeralRepository->find($id);

        if (empty($saldoGeral)) {
            Flash::error(__('messages.not_found', ['model' => __('models/saldoGerals.singular')]));

            return redirect(route('saldoGerals.index'));
        }

        $this->saldoGeralRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/saldoGerals.singular')]));

        return redirect(route('saldoGerals.index'));
    }
}
