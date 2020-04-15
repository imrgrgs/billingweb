<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;
use App\Repositories\ProgramaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProgramaController extends AppBaseController
{
    /** @var  ProgramaRepository */
    private $programaRepository;

    public function __construct(ProgramaRepository $programaRepo)
    {
        $this->programaRepository = $programaRepo;
    }

    /**
     * Display a listing of the Programa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $programas = $this->programaRepository->all();

        return view('programas.index')
            ->with('programas', $programas);
    }

    /**
     * Show the form for creating a new Programa.
     *
     * @return Response
     */
    public function create()
    {
        return view('programas.create');
    }

    /**
     * Store a newly created Programa in storage.
     *
     * @param CreateProgramaRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramaRequest $request)
    {
        $input = $request->all();

        $programa = $this->programaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/programas.singular')]));

        return redirect(route('programas.index'));
    }

    /**
     * Display the specified Programa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programas.singular')]));

            return redirect(route('programas.index'));
        }

        return view('programas.show')->with('programa', $programa);
    }

    /**
     * Show the form for editing the specified Programa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programas.singular')]));

            return redirect(route('programas.index'));
        }

        return view('programas.edit')->with('programa', $programa);
    }

    /**
     * Update the specified Programa in storage.
     *
     * @param int $id
     * @param UpdateProgramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramaRequest $request)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programas.singular')]));

            return redirect(route('programas.index'));
        }

        $programa = $this->programaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/programas.singular')]));

        return redirect(route('programas.index'));
    }

    /**
     * Remove the specified Programa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/programas.singular')]));

            return redirect(route('programas.index'));
        }

        $this->programaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/programas.singular')]));

        return redirect(route('programas.index'));
    }
}
