<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcessoRequest;
use App\Http\Requests\UpdateAcessoRequest;
use App\Repositories\AcessoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AcessoController extends AppBaseController
{
    /** @var  AcessoRepository */
    private $acessoRepository;

    public function __construct(AcessoRepository $acessoRepo)
    {
        $this->acessoRepository = $acessoRepo;
    }

    /**
     * Display a listing of the Acesso.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $acessos = $this->acessoRepository->all();

        return view('acessos.index')
            ->with('acessos', $acessos);
    }

    /**
     * Show the form for creating a new Acesso.
     *
     * @return Response
     */
    public function create()
    {
        return view('acessos.create');
    }

    /**
     * Store a newly created Acesso in storage.
     *
     * @param CreateAcessoRequest $request
     *
     * @return Response
     */
    public function store(CreateAcessoRequest $request)
    {
        $input = $request->all();

        $acesso = $this->acessoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/acessos.singular')]));

        return redirect(route('acessos.index'));
    }

    /**
     * Display the specified Acesso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acesso = $this->acessoRepository->find($id);

        if (empty($acesso)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acessos.singular')]));

            return redirect(route('acessos.index'));
        }

        return view('acessos.show')->with('acesso', $acesso);
    }

    /**
     * Show the form for editing the specified Acesso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $acesso = $this->acessoRepository->find($id);

        if (empty($acesso)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acessos.singular')]));

            return redirect(route('acessos.index'));
        }

        return view('acessos.edit')->with('acesso', $acesso);
    }

    /**
     * Update the specified Acesso in storage.
     *
     * @param int $id
     * @param UpdateAcessoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcessoRequest $request)
    {
        $acesso = $this->acessoRepository->find($id);

        if (empty($acesso)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acessos.singular')]));

            return redirect(route('acessos.index'));
        }

        $acesso = $this->acessoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/acessos.singular')]));

        return redirect(route('acessos.index'));
    }

    /**
     * Remove the specified Acesso from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acesso = $this->acessoRepository->find($id);

        if (empty($acesso)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acessos.singular')]));

            return redirect(route('acessos.index'));
        }

        $this->acessoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/acessos.singular')]));

        return redirect(route('acessos.index'));
    }
}
