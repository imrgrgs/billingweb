<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabEspARequest;
use App\Http\Requests\UpdateTabEspARequest;
use App\Repositories\TabEspARepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TabEspAController extends AppBaseController
{
    /** @var  TabEspARepository */
    private $tabEspARepository;

    public function __construct(TabEspARepository $tabEspARepo)
    {
        $this->tabEspARepository = $tabEspARepo;
    }

    /**
     * Display a listing of the TabEspA.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tabEspAs = $this->tabEspARepository->all();

        return view('tab_esp_as.index')
            ->with('tabEspAs', $tabEspAs);
    }

    /**
     * Show the form for creating a new TabEspA.
     *
     * @return Response
     */
    public function create()
    {
        return view('tab_esp_as.create');
    }

    /**
     * Store a newly created TabEspA in storage.
     *
     * @param CreateTabEspARequest $request
     *
     * @return Response
     */
    public function store(CreateTabEspARequest $request)
    {
        $input = $request->all();

        $tabEspA = $this->tabEspARepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tabEspAs.singular')]));

        return redirect(route('tabEspAs.index'));
    }

    /**
     * Display the specified TabEspA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabEspA = $this->tabEspARepository->find($id);

        if (empty($tabEspA)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEspAs.singular')]));

            return redirect(route('tabEspAs.index'));
        }

        return view('tab_esp_as.show')->with('tabEspA', $tabEspA);
    }

    /**
     * Show the form for editing the specified TabEspA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabEspA = $this->tabEspARepository->find($id);

        if (empty($tabEspA)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEspAs.singular')]));

            return redirect(route('tabEspAs.index'));
        }

        return view('tab_esp_as.edit')->with('tabEspA', $tabEspA);
    }

    /**
     * Update the specified TabEspA in storage.
     *
     * @param int $id
     * @param UpdateTabEspARequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTabEspARequest $request)
    {
        $tabEspA = $this->tabEspARepository->find($id);

        if (empty($tabEspA)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEspAs.singular')]));

            return redirect(route('tabEspAs.index'));
        }

        $tabEspA = $this->tabEspARepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tabEspAs.singular')]));

        return redirect(route('tabEspAs.index'));
    }

    /**
     * Remove the specified TabEspA from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabEspA = $this->tabEspARepository->find($id);

        if (empty($tabEspA)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tabEspAs.singular')]));

            return redirect(route('tabEspAs.index'));
        }

        $this->tabEspARepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tabEspAs.singular')]));

        return redirect(route('tabEspAs.index'));
    }
}
