<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFonesRestricaoRequest;
use App\Http\Requests\UpdateFonesRestricaoRequest;
use App\Repositories\FonesRestricaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FonesRestricaoController extends AppBaseController
{
    /** @var  FonesRestricaoRepository */
    private $fonesRestricaoRepository;

    public function __construct(FonesRestricaoRepository $fonesRestricaoRepo)
    {
        $this->fonesRestricaoRepository = $fonesRestricaoRepo;
    }

    /**
     * Display a listing of the FonesRestricao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fonesRestricaos = $this->fonesRestricaoRepository->all();

        return view('fones_restricaos.index')
            ->with('fonesRestricaos', $fonesRestricaos);
    }

    /**
     * Show the form for creating a new FonesRestricao.
     *
     * @return Response
     */
    public function create()
    {
        return view('fones_restricaos.create');
    }

    /**
     * Store a newly created FonesRestricao in storage.
     *
     * @param CreateFonesRestricaoRequest $request
     *
     * @return Response
     */
    public function store(CreateFonesRestricaoRequest $request)
    {
        $input = $request->all();

        $fonesRestricao = $this->fonesRestricaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fonesRestricaos.singular')]));

        return redirect(route('fonesRestricaos.index'));
    }

    /**
     * Display the specified FonesRestricao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fonesRestricao = $this->fonesRestricaoRepository->find($id);

        if (empty($fonesRestricao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesRestricaos.singular')]));

            return redirect(route('fonesRestricaos.index'));
        }

        return view('fones_restricaos.show')->with('fonesRestricao', $fonesRestricao);
    }

    /**
     * Show the form for editing the specified FonesRestricao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fonesRestricao = $this->fonesRestricaoRepository->find($id);

        if (empty($fonesRestricao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesRestricaos.singular')]));

            return redirect(route('fonesRestricaos.index'));
        }

        return view('fones_restricaos.edit')->with('fonesRestricao', $fonesRestricao);
    }

    /**
     * Update the specified FonesRestricao in storage.
     *
     * @param int $id
     * @param UpdateFonesRestricaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFonesRestricaoRequest $request)
    {
        $fonesRestricao = $this->fonesRestricaoRepository->find($id);

        if (empty($fonesRestricao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesRestricaos.singular')]));

            return redirect(route('fonesRestricaos.index'));
        }

        $fonesRestricao = $this->fonesRestricaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fonesRestricaos.singular')]));

        return redirect(route('fonesRestricaos.index'));
    }

    /**
     * Remove the specified FonesRestricao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fonesRestricao = $this->fonesRestricaoRepository->find($id);

        if (empty($fonesRestricao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fonesRestricaos.singular')]));

            return redirect(route('fonesRestricaos.index'));
        }

        $this->fonesRestricaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fonesRestricaos.singular')]));

        return redirect(route('fonesRestricaos.index'));
    }
}
