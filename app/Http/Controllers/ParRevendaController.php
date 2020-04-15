<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParRevendaRequest;
use App\Http\Requests\UpdateParRevendaRequest;
use App\Repositories\ParRevendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParRevendaController extends AppBaseController
{
    /** @var  ParRevendaRepository */
    private $parRevendaRepository;

    public function __construct(ParRevendaRepository $parRevendaRepo)
    {
        $this->parRevendaRepository = $parRevendaRepo;
    }

    /**
     * Display a listing of the ParRevenda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parRevendas = $this->parRevendaRepository->all();

        return view('par_revendas.index')
            ->with('parRevendas', $parRevendas);
    }

    /**
     * Show the form for creating a new ParRevenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('par_revendas.create');
    }

    /**
     * Store a newly created ParRevenda in storage.
     *
     * @param CreateParRevendaRequest $request
     *
     * @return Response
     */
    public function store(CreateParRevendaRequest $request)
    {
        $input = $request->all();

        $parRevenda = $this->parRevendaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/parRevendas.singular')]));

        return redirect(route('parRevendas.index'));
    }

    /**
     * Display the specified ParRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parRevenda = $this->parRevendaRepository->find($id);

        if (empty($parRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parRevendas.singular')]));

            return redirect(route('parRevendas.index'));
        }

        return view('par_revendas.show')->with('parRevenda', $parRevenda);
    }

    /**
     * Show the form for editing the specified ParRevenda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parRevenda = $this->parRevendaRepository->find($id);

        if (empty($parRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parRevendas.singular')]));

            return redirect(route('parRevendas.index'));
        }

        return view('par_revendas.edit')->with('parRevenda', $parRevenda);
    }

    /**
     * Update the specified ParRevenda in storage.
     *
     * @param int $id
     * @param UpdateParRevendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParRevendaRequest $request)
    {
        $parRevenda = $this->parRevendaRepository->find($id);

        if (empty($parRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parRevendas.singular')]));

            return redirect(route('parRevendas.index'));
        }

        $parRevenda = $this->parRevendaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/parRevendas.singular')]));

        return redirect(route('parRevendas.index'));
    }

    /**
     * Remove the specified ParRevenda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parRevenda = $this->parRevendaRepository->find($id);

        if (empty($parRevenda)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parRevendas.singular')]));

            return redirect(route('parRevendas.index'));
        }

        $this->parRevendaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/parRevendas.singular')]));

        return redirect(route('parRevendas.index'));
    }
}
