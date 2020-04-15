<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabAssinanteRequest;
use App\Http\Requests\UpdateTabAssinanteRequest;
use App\Repositories\TabAssinanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TabAssinanteController extends AppBaseController
{
    /** @var  TabAssinanteRepository */
    private $tabAssinanteRepository;

    public function __construct(TabAssinanteRepository $tabAssinanteRepo)
    {
        $this->tabAssinanteRepository = $tabAssinanteRepo;
    }

    /**
     * Display a listing of the TabAssinante.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tabAssinantes = $this->tabAssinanteRepository->all();

        return view('tab_assinantes.index')
            ->with('tabAssinantes', $tabAssinantes);
    }

    /**
     * Show the form for creating a new TabAssinante.
     *
     * @return Response
     */
    public function create()
    {
        return view('tab_assinantes.create');
    }

    /**
     * Store a newly created TabAssinante in storage.
     *
     * @param CreateTabAssinanteRequest $request
     *
     * @return Response
     */
    public function store(CreateTabAssinanteRequest $request)
    {
        $input = $request->all();

        $tabAssinante = $this->tabAssinanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tabAssinantes.singular')]));

        return redirect(route('tabAssinantes.index'));
    }

    /**
     * Display the specified TabAssinante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabAssinante = $this->tabAssinanteRepository->find($id);

        if (empty($tabAssinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabAssinantes.singular')]));

            return redirect(route('tabAssinantes.index'));
        }

        return view('tab_assinantes.show')->with('tabAssinante', $tabAssinante);
    }

    /**
     * Show the form for editing the specified TabAssinante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabAssinante = $this->tabAssinanteRepository->find($id);

        if (empty($tabAssinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabAssinantes.singular')]));

            return redirect(route('tabAssinantes.index'));
        }

        return view('tab_assinantes.edit')->with('tabAssinante', $tabAssinante);
    }

    /**
     * Update the specified TabAssinante in storage.
     *
     * @param int $id
     * @param UpdateTabAssinanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTabAssinanteRequest $request)
    {
        $tabAssinante = $this->tabAssinanteRepository->find($id);

        if (empty($tabAssinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabAssinantes.singular')]));

            return redirect(route('tabAssinantes.index'));
        }

        $tabAssinante = $this->tabAssinanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tabAssinantes.singular')]));

        return redirect(route('tabAssinantes.index'));
    }

    /**
     * Remove the specified TabAssinante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabAssinante = $this->tabAssinanteRepository->find($id);

        if (empty($tabAssinante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabAssinantes.singular')]));

            return redirect(route('tabAssinantes.index'));
        }

        $this->tabAssinanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tabAssinantes.singular')]));

        return redirect(route('tabAssinantes.index'));
    }
}
