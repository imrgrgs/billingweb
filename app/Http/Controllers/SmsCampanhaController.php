<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSmsCampanhaRequest;
use App\Http\Requests\UpdateSmsCampanhaRequest;
use App\Repositories\SmsCampanhaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SmsCampanhaController extends AppBaseController
{
    /** @var  SmsCampanhaRepository */
    private $smsCampanhaRepository;

    public function __construct(SmsCampanhaRepository $smsCampanhaRepo)
    {
        $this->smsCampanhaRepository = $smsCampanhaRepo;
    }

    /**
     * Display a listing of the SmsCampanha.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $smsCampanhas = $this->smsCampanhaRepository->all();

        return view('sms_campanhas.index')
            ->with('smsCampanhas', $smsCampanhas);
    }

    /**
     * Show the form for creating a new SmsCampanha.
     *
     * @return Response
     */
    public function create()
    {
        return view('sms_campanhas.create');
    }

    /**
     * Store a newly created SmsCampanha in storage.
     *
     * @param CreateSmsCampanhaRequest $request
     *
     * @return Response
     */
    public function store(CreateSmsCampanhaRequest $request)
    {
        $input = $request->all();

        $smsCampanha = $this->smsCampanhaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/smsCampanhas.singular')]));

        return redirect(route('smsCampanhas.index'));
    }

    /**
     * Display the specified SmsCampanha.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $smsCampanha = $this->smsCampanhaRepository->find($id);

        if (empty($smsCampanha)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhas.singular')]));

            return redirect(route('smsCampanhas.index'));
        }

        return view('sms_campanhas.show')->with('smsCampanha', $smsCampanha);
    }

    /**
     * Show the form for editing the specified SmsCampanha.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $smsCampanha = $this->smsCampanhaRepository->find($id);

        if (empty($smsCampanha)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhas.singular')]));

            return redirect(route('smsCampanhas.index'));
        }

        return view('sms_campanhas.edit')->with('smsCampanha', $smsCampanha);
    }

    /**
     * Update the specified SmsCampanha in storage.
     *
     * @param int $id
     * @param UpdateSmsCampanhaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSmsCampanhaRequest $request)
    {
        $smsCampanha = $this->smsCampanhaRepository->find($id);

        if (empty($smsCampanha)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhas.singular')]));

            return redirect(route('smsCampanhas.index'));
        }

        $smsCampanha = $this->smsCampanhaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/smsCampanhas.singular')]));

        return redirect(route('smsCampanhas.index'));
    }

    /**
     * Remove the specified SmsCampanha from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $smsCampanha = $this->smsCampanhaRepository->find($id);

        if (empty($smsCampanha)) {
            Flash::error(__('messages.not_found', ['model' => __('models/smsCampanhas.singular')]));

            return redirect(route('smsCampanhas.index'));
        }

        $this->smsCampanhaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/smsCampanhas.singular')]));

        return redirect(route('smsCampanhas.index'));
    }
}
