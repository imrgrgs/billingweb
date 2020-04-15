<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAtaqueRequest;
use App\Http\Requests\UpdateAtaqueRequest;
use App\Repositories\AtaqueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AtaqueController extends AppBaseController
{
    /** @var  AtaqueRepository */
    private $ataqueRepository;

    public function __construct(AtaqueRepository $ataqueRepo)
    {
        $this->ataqueRepository = $ataqueRepo;
    }

    /**
     * Display a listing of the Ataque.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ataques = $this->ataqueRepository->all();

        return view('ataques.index')
            ->with('ataques', $ataques);
    }

    /**
     * Show the form for creating a new Ataque.
     *
     * @return Response
     */
    public function create()
    {
        return view('ataques.create');
    }

    /**
     * Store a newly created Ataque in storage.
     *
     * @param CreateAtaqueRequest $request
     *
     * @return Response
     */
    public function store(CreateAtaqueRequest $request)
    {
        $input = $request->all();

        $ataque = $this->ataqueRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ataques.singular')]));

        return redirect(route('ataques.index'));
    }

    /**
     * Display the specified Ataque.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ataque = $this->ataqueRepository->find($id);

        if (empty($ataque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ataques.singular')]));

            return redirect(route('ataques.index'));
        }

        return view('ataques.show')->with('ataque', $ataque);
    }

    /**
     * Show the form for editing the specified Ataque.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ataque = $this->ataqueRepository->find($id);

        if (empty($ataque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ataques.singular')]));

            return redirect(route('ataques.index'));
        }

        return view('ataques.edit')->with('ataque', $ataque);
    }

    /**
     * Update the specified Ataque in storage.
     *
     * @param int $id
     * @param UpdateAtaqueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtaqueRequest $request)
    {
        $ataque = $this->ataqueRepository->find($id);

        if (empty($ataque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ataques.singular')]));

            return redirect(route('ataques.index'));
        }

        $ataque = $this->ataqueRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ataques.singular')]));

        return redirect(route('ataques.index'));
    }

    /**
     * Remove the specified Ataque from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ataque = $this->ataqueRepository->find($id);

        if (empty($ataque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ataques.singular')]));

            return redirect(route('ataques.index'));
        }

        $this->ataqueRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ataques.singular')]));

        return redirect(route('ataques.index'));
    }
}
