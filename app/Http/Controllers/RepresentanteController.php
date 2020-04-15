<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRepresentanteRequest;
use App\Http\Requests\UpdateRepresentanteRequest;
use App\Repositories\RepresentanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RepresentanteController extends AppBaseController
{
    /** @var  RepresentanteRepository */
    private $representanteRepository;

    public function __construct(RepresentanteRepository $representanteRepo)
    {
        $this->representanteRepository = $representanteRepo;
    }

    /**
     * Display a listing of the Representante.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $representantes = $this->representanteRepository->all();

        return view('representantes.index')
            ->with('representantes', $representantes);
    }

    /**
     * Show the form for creating a new Representante.
     *
     * @return Response
     */
    public function create()
    {
        return view('representantes.create');
    }

    /**
     * Store a newly created Representante in storage.
     *
     * @param CreateRepresentanteRequest $request
     *
     * @return Response
     */
    public function store(CreateRepresentanteRequest $request)
    {
        $input = $request->all();

        $representante = $this->representanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/representantes.singular')]));

        return redirect(route('representantes.index'));
    }

    /**
     * Display the specified Representante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $representante = $this->representanteRepository->find($id);

        if (empty($representante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/representantes.singular')]));

            return redirect(route('representantes.index'));
        }

        return view('representantes.show')->with('representante', $representante);
    }

    /**
     * Show the form for editing the specified Representante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $representante = $this->representanteRepository->find($id);

        if (empty($representante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/representantes.singular')]));

            return redirect(route('representantes.index'));
        }

        return view('representantes.edit')->with('representante', $representante);
    }

    /**
     * Update the specified Representante in storage.
     *
     * @param int $id
     * @param UpdateRepresentanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepresentanteRequest $request)
    {
        $representante = $this->representanteRepository->find($id);

        if (empty($representante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/representantes.singular')]));

            return redirect(route('representantes.index'));
        }

        $representante = $this->representanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/representantes.singular')]));

        return redirect(route('representantes.index'));
    }

    /**
     * Remove the specified Representante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $representante = $this->representanteRepository->find($id);

        if (empty($representante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/representantes.singular')]));

            return redirect(route('representantes.index'));
        }

        $this->representanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/representantes.singular')]));

        return redirect(route('representantes.index'));
    }
}
