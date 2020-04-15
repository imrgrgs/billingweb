<?php

namespace App\Http\Controllers;

use App\DataTables\FornecedorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFornecedorRequest;
use App\Http\Requests\UpdateFornecedorRequest;
use App\Repositories\FornecedorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FornecedorController extends AppBaseController
{
    /** @var  FornecedorRepository */
    private $fornecedorRepository;

    public function __construct(FornecedorRepository $fornecedorRepo)
    {
        $this->fornecedorRepository = $fornecedorRepo;
    }

    /**
     * Display a listing of the Fornecedor.
     *
     * @param FornecedorDataTable $fornecedorDataTable
     * @return Response
     */
    public function index(FornecedorDataTable $fornecedorDataTable)
    {
        return $fornecedorDataTable->render('fornecedores.index');
    }

    /**
     * Show the form for creating a new Fornecedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('fornecedores.create');
    }

    /**
     * Store a newly created Fornecedor in storage.
     *
     * @param CreateFornecedorRequest $request
     *
     * @return Response
     */
    public function store(CreateFornecedorRequest $request)
    {
        $input = $request->all();

        $fornecedor = $this->fornecedorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fornecedores.singular')]));

        return redirect(route('fornecedores.index'));
    }

    /**
     * Display the specified Fornecedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('models/fornecedores.singular').' '.__('messages.not_found'));

            return redirect(route('fornecedores.index'));
        }

        return view('fornecedores.show')->with('fornecedor', $fornecedor);
    }

    /**
     * Show the form for editing the specified Fornecedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedores.singular')]));

            return redirect(route('fornecedores.index'));
        }

        return view('fornecedores.edit')->with('fornecedor', $fornecedor);
    }

    /**
     * Update the specified Fornecedor in storage.
     *
     * @param  int              $id
     * @param UpdateFornecedorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFornecedorRequest $request)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedores.singular')]));

            return redirect(route('fornecedores.index'));
        }

        $fornecedor = $this->fornecedorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fornecedores.singular')]));

        return redirect(route('fornecedores.index'));
    }

    /**
     * Remove the specified Fornecedor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedores.singular')]));

            return redirect(route('fornecedores.index'));
        }

        $this->fornecedorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fornecedores.singular')]));

        return redirect(route('fornecedores.index'));
    }
}
