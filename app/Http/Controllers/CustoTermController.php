<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustoTermRequest;
use App\Http\Requests\UpdateCustoTermRequest;
use App\Repositories\CustoTermRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CustoTermController extends AppBaseController
{
    /** @var  CustoTermRepository */
    private $custoTermRepository;

    public function __construct(CustoTermRepository $custoTermRepo)
    {
        $this->custoTermRepository = $custoTermRepo;
    }

    /**
     * Display a listing of the CustoTerm.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $custoTerms = $this->custoTermRepository->all();

        return view('custo_terms.index')
            ->with('custoTerms', $custoTerms);
    }

    /**
     * Show the form for creating a new CustoTerm.
     *
     * @return Response
     */
    public function create()
    {
        return view('custo_terms.create');
    }

    /**
     * Store a newly created CustoTerm in storage.
     *
     * @param CreateCustoTermRequest $request
     *
     * @return Response
     */
    public function store(CreateCustoTermRequest $request)
    {
        $input = $request->all();

        $custoTerm = $this->custoTermRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/custoTerms.singular')]));

        return redirect(route('custoTerms.index'));
    }

    /**
     * Display the specified CustoTerm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $custoTerm = $this->custoTermRepository->find($id);

        if (empty($custoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/custoTerms.singular')]));

            return redirect(route('custoTerms.index'));
        }

        return view('custo_terms.show')->with('custoTerm', $custoTerm);
    }

    /**
     * Show the form for editing the specified CustoTerm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $custoTerm = $this->custoTermRepository->find($id);

        if (empty($custoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/custoTerms.singular')]));

            return redirect(route('custoTerms.index'));
        }

        return view('custo_terms.edit')->with('custoTerm', $custoTerm);
    }

    /**
     * Update the specified CustoTerm in storage.
     *
     * @param int $id
     * @param UpdateCustoTermRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustoTermRequest $request)
    {
        $custoTerm = $this->custoTermRepository->find($id);

        if (empty($custoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/custoTerms.singular')]));

            return redirect(route('custoTerms.index'));
        }

        $custoTerm = $this->custoTermRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/custoTerms.singular')]));

        return redirect(route('custoTerms.index'));
    }

    /**
     * Remove the specified CustoTerm from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $custoTerm = $this->custoTermRepository->find($id);

        if (empty($custoTerm)) {
            Flash::error(__('messages.not_found', ['model' => __('models/custoTerms.singular')]));

            return redirect(route('custoTerms.index'));
        }

        $this->custoTermRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/custoTerms.singular')]));

        return redirect(route('custoTerms.index'));
    }
}
