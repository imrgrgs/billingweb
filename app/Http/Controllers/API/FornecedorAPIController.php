<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFornecedorAPIRequest;
use App\Http\Requests\API\UpdateFornecedorAPIRequest;
use App\Models\Fornecedor;
use App\Repositories\FornecedorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FornecedorController
 * @package App\Http\Controllers\API
 */

class FornecedorAPIController extends AppBaseController
{
    /** @var  FornecedorRepository */
    private $fornecedorRepository;

    public function __construct(FornecedorRepository $fornecedorRepo)
    {
        $this->fornecedorRepository = $fornecedorRepo;
    }

    /**
     * Display a listing of the Fornecedor.
     * GET|HEAD /fornecedores
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $fornecedores = $this->fornecedorRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $fornecedores->toArray(),
            __('messages.retrieved', ['model' => __('models/fornecedores.plural')])
        );
    }

    /**
     * Store a newly created Fornecedor in storage.
     * POST /fornecedores
     *
     * @param CreateFornecedorAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFornecedorAPIRequest $request)
    {
        $input = $request->all();

        $fornecedor = $this->fornecedorRepository->create($input);

        return $this->sendResponse(
            $fornecedor->toArray(),
            __('messages.saved', ['model' => __('models/fornecedores.singular')])
        );
    }

    /**
     * Display the specified Fornecedor.
     * GET|HEAD /fornecedores/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Fornecedor $fornecedor */
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/fornecedores.singular')])
            );
        }

        return $this->sendResponse(
            $fornecedor->toArray(),
            __('messages.retrieved', ['model' => __('models/fornecedores.singular')])
        );
    }

    /**
     * Update the specified Fornecedor in storage.
     * PUT/PATCH /fornecedores/{id}
     *
     * @param int $id
     * @param UpdateFornecedorAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFornecedorAPIRequest $request)
    {
        $input = $request->all();

        /** @var Fornecedor $fornecedor */
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/fornecedores.singular')])
            );
        }

        $fornecedor = $this->fornecedorRepository->update($input, $id);

        return $this->sendResponse(
            $fornecedor->toArray(),
            __('messages.updated', ['model' => __('models/fornecedores.singular')])
        );
    }

    /**
     * Remove the specified Fornecedor from storage.
     * DELETE /fornecedores/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Fornecedor $fornecedor */
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/fornecedores.singular')])
            );
        }

        $fornecedor->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/fornecedores.singular')])
        );
    }
}
