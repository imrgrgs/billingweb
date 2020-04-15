<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAparelhoRequest;
use App\Http\Requests\UpdateAparelhoRequest;
use App\Repositories\AparelhoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AparelhoController extends AppBaseController
{
    /** @var  AparelhoRepository */
    private $aparelhoRepository;

    public function __construct(AparelhoRepository $aparelhoRepo)
    {
        $this->aparelhoRepository = $aparelhoRepo;
    }

    /**
     * Display a listing of the Aparelho.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aparelhos = $this->aparelhoRepository->all();

        return view('aparelhos.index')
            ->with('aparelhos', $aparelhos);
    }

    /**
     * Show the form for creating a new Aparelho.
     *
     * @return Response
     */
    public function create()
    {
        return view('aparelhos.create');
    }

    /**
     * Store a newly created Aparelho in storage.
     *
     * @param CreateAparelhoRequest $request
     *
     * @return Response
     */
    public function store(CreateAparelhoRequest $request)
    {
        $input = $request->all();

        $aparelho = $this->aparelhoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/aparelhos.singular')]));

        return redirect(route('aparelhos.index'));
    }

    /**
     * Display the specified Aparelho.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aparelho = $this->aparelhoRepository->find($id);

        if (empty($aparelho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aparelhos.singular')]));

            return redirect(route('aparelhos.index'));
        }

        return view('aparelhos.show')->with('aparelho', $aparelho);
    }

    /**
     * Show the form for editing the specified Aparelho.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aparelho = $this->aparelhoRepository->find($id);

        if (empty($aparelho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aparelhos.singular')]));

            return redirect(route('aparelhos.index'));
        }

        return view('aparelhos.edit')->with('aparelho', $aparelho);
    }

    /**
     * Update the specified Aparelho in storage.
     *
     * @param int $id
     * @param UpdateAparelhoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAparelhoRequest $request)
    {
        $aparelho = $this->aparelhoRepository->find($id);

        if (empty($aparelho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aparelhos.singular')]));

            return redirect(route('aparelhos.index'));
        }

        $aparelho = $this->aparelhoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/aparelhos.singular')]));

        return redirect(route('aparelhos.index'));
    }

    /**
     * Remove the specified Aparelho from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aparelho = $this->aparelhoRepository->find($id);

        if (empty($aparelho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aparelhos.singular')]));

            return redirect(route('aparelhos.index'));
        }

        $this->aparelhoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/aparelhos.singular')]));

        return redirect(route('aparelhos.index'));
    }
}
