<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdesaoRequest;
use App\Http\Requests\UpdateAdesaoRequest;
use App\Repositories\AdesaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdesaoController extends AppBaseController
{
    /** @var  AdesaoRepository */
    private $adesaoRepository;

    public function __construct(AdesaoRepository $adesaoRepo)
    {
        $this->adesaoRepository = $adesaoRepo;
    }

    /**
     * Display a listing of the Adesao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $adesaos = $this->adesaoRepository->all();

        return view('adesaos.index')
            ->with('adesaos', $adesaos);
    }

    /**
     * Show the form for creating a new Adesao.
     *
     * @return Response
     */
    public function create()
    {
        return view('adesaos.create');
    }

    /**
     * Store a newly created Adesao in storage.
     *
     * @param CreateAdesaoRequest $request
     *
     * @return Response
     */
    public function store(CreateAdesaoRequest $request)
    {
        $input = $request->all();

        $adesao = $this->adesaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/adesaos.singular')]));

        return redirect(route('adesaos.index'));
    }

    /**
     * Display the specified Adesao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adesao = $this->adesaoRepository->find($id);

        if (empty($adesao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/adesaos.singular')]));

            return redirect(route('adesaos.index'));
        }

        return view('adesaos.show')->with('adesao', $adesao);
    }

    /**
     * Show the form for editing the specified Adesao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adesao = $this->adesaoRepository->find($id);

        if (empty($adesao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/adesaos.singular')]));

            return redirect(route('adesaos.index'));
        }

        return view('adesaos.edit')->with('adesao', $adesao);
    }

    /**
     * Update the specified Adesao in storage.
     *
     * @param int $id
     * @param UpdateAdesaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdesaoRequest $request)
    {
        $adesao = $this->adesaoRepository->find($id);

        if (empty($adesao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/adesaos.singular')]));

            return redirect(route('adesaos.index'));
        }

        $adesao = $this->adesaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/adesaos.singular')]));

        return redirect(route('adesaos.index'));
    }

    /**
     * Remove the specified Adesao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adesao = $this->adesaoRepository->find($id);

        if (empty($adesao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/adesaos.singular')]));

            return redirect(route('adesaos.index'));
        }

        $this->adesaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/adesaos.singular')]));

        return redirect(route('adesaos.index'));
    }
}
