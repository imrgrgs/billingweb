<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabEspRequest;
use App\Http\Requests\UpdateTabEspRequest;
use App\Repositories\TabEspRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TabEspController extends AppBaseController
{
    /** @var  TabEspRepository */
    private $tabEspRepository;

    public function __construct(TabEspRepository $tabEspRepo)
    {
        $this->tabEspRepository = $tabEspRepo;
    }

    /**
     * Display a listing of the TabEsp.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tabEsps = $this->tabEspRepository->all();

        return view('tab_esps.index')
            ->with('tabEsps', $tabEsps);
    }

    /**
     * Show the form for creating a new TabEsp.
     *
     * @return Response
     */
    public function create()
    {
        return view('tab_esps.create');
    }

    /**
     * Store a newly created TabEsp in storage.
     *
     * @param CreateTabEspRequest $request
     *
     * @return Response
     */
    public function store(CreateTabEspRequest $request)
    {
        $input = $request->all();

        $tabEsp = $this->tabEspRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tabEsps.singular')]));

        return redirect(route('tabEsps.index'));
    }

    /**
     * Display the specified TabEsp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabEsp = $this->tabEspRepository->find($id);

        if (empty($tabEsp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEsps.singular')]));

            return redirect(route('tabEsps.index'));
        }

        return view('tab_esps.show')->with('tabEsp', $tabEsp);
    }

    /**
     * Show the form for editing the specified TabEsp.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabEsp = $this->tabEspRepository->find($id);

        if (empty($tabEsp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEsps.singular')]));

            return redirect(route('tabEsps.index'));
        }

        return view('tab_esps.edit')->with('tabEsp', $tabEsp);
    }

    /**
     * Update the specified TabEsp in storage.
     *
     * @param int $id
     * @param UpdateTabEspRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTabEspRequest $request)
    {
        $tabEsp = $this->tabEspRepository->find($id);

        if (empty($tabEsp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEsps.singular')]));

            return redirect(route('tabEsps.index'));
        }

        $tabEsp = $this->tabEspRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tabEsps.singular')]));

        return redirect(route('tabEsps.index'));
    }

    /**
     * Remove the specified TabEsp from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabEsp = $this->tabEspRepository->find($id);

        if (empty($tabEsp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEsps.singular')]));

            return redirect(route('tabEsps.index'));
        }

        $this->tabEspRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tabEsps.singular')]));

        return redirect(route('tabEsps.index'));
    }
}
