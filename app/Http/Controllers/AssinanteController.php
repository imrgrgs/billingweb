<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAssinanteRequest;
use App\Http\Requests\UpdateAssinanteRequest;
use App\Repositories\AssinanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AssinanteController extends AppBaseController
{
    /** @var  AssinanteRepository */
    private $assinanteRepository;

    public function __construct(AssinanteRepository $assinanteRepo)
    {
        $this->assinanteRepository = $assinanteRepo;
    }

    /**
     * Display a listing of the Assinante.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $assinantes = $this->assinanteRepository->all();

        return view('assinantes.index')
            ->with('assinantes', $assinantes);
    }

    /**
     * Show the form for creating a new Assinante.
     *
     * @return Response
     */
    public function create()
    {
        return view('assinantes.create');
    }

    /**
     * Store a newly created Assinante in storage.
     *
     * @param CreateAssinanteRequest $request
     *
     * @return Response
     */
    public function store(CreateAssinanteRequest $request)
    {
        $input = $request->all();

        $assinante = $this->assinanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/assinantes.singular')]));

        return redirect(route('assinantes.index'));
    }

    /**
     * Display the specified Assinante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $assinante = $this->assinanteRepository->find($id);

        if (empty($assinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinantes.singular')]));

            return redirect(route('assinantes.index'));
        }

        return view('assinantes.show')->with('assinante', $assinante);
    }

    /**
     * Show the form for editing the specified Assinante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $assinante = $this->assinanteRepository->find($id);

        if (empty($assinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinantes.singular')]));

            return redirect(route('assinantes.index'));
        }

        return view('assinantes.edit')->with('assinante', $assinante);
    }

    /**
     * Update the specified Assinante in storage.
     *
     * @param int $id
     * @param UpdateAssinanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAssinanteRequest $request)
    {
        $assinante = $this->assinanteRepository->find($id);

        if (empty($assinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinantes.singular')]));

            return redirect(route('assinantes.index'));
        }

        $assinante = $this->assinanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/assinantes.singular')]));

        return redirect(route('assinantes.index'));
    }

    /**
     * Remove the specified Assinante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $assinante = $this->assinanteRepository->find($id);

        if (empty($assinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/assinantes.singular')]));

            return redirect(route('assinantes.index'));
        }

        $this->assinanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/assinantes.singular')]));

        return redirect(route('assinantes.index'));
    }
}
