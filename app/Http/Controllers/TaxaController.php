<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaxaRequest;
use App\Http\Requests\UpdateTaxaRequest;
use App\Repositories\TaxaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TaxaController extends AppBaseController
{
    /** @var  TaxaRepository */
    private $taxaRepository;

    public function __construct(TaxaRepository $taxaRepo)
    {
        $this->taxaRepository = $taxaRepo;
    }

    /**
     * Display a listing of the Taxa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $taxas = $this->taxaRepository->all();

        return view('taxas.index')
            ->with('taxas', $taxas);
    }

    /**
     * Show the form for creating a new Taxa.
     *
     * @return Response
     */
    public function create()
    {
        return view('taxas.create');
    }

    /**
     * Store a newly created Taxa in storage.
     *
     * @param CreateTaxaRequest $request
     *
     * @return Response
     */
    public function store(CreateTaxaRequest $request)
    {
        $input = $request->all();

        $taxa = $this->taxaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/taxas.singular')]));

        return redirect(route('taxas.index'));
    }

    /**
     * Display the specified Taxa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taxa = $this->taxaRepository->find($id);

        if (empty($taxa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/taxas.singular')]));

            return redirect(route('taxas.index'));
        }

        return view('taxas.show')->with('taxa', $taxa);
    }

    /**
     * Show the form for editing the specified Taxa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taxa = $this->taxaRepository->find($id);

        if (empty($taxa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/taxas.singular')]));

            return redirect(route('taxas.index'));
        }

        return view('taxas.edit')->with('taxa', $taxa);
    }

    /**
     * Update the specified Taxa in storage.
     *
     * @param int $id
     * @param UpdateTaxaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaxaRequest $request)
    {
        $taxa = $this->taxaRepository->find($id);

        if (empty($taxa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/taxas.singular')]));

            return redirect(route('taxas.index'));
        }

        $taxa = $this->taxaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/taxas.singular')]));

        return redirect(route('taxas.index'));
    }

    /**
     * Remove the specified Taxa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taxa = $this->taxaRepository->find($id);

        if (empty($taxa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/taxas.singular')]));

            return redirect(route('taxas.index'));
        }

        $this->taxaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/taxas.singular')]));

        return redirect(route('taxas.index'));
    }
}
