<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCredito0800CartaoRequest;
use App\Http\Requests\UpdateCredito0800CartaoRequest;
use App\Repositories\Credito0800CartaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Credito0800CartaoController extends AppBaseController
{
    /** @var  Credito0800CartaoRepository */
    private $credito0800CartaoRepository;

    public function __construct(Credito0800CartaoRepository $credito0800CartaoRepo)
    {
        $this->credito0800CartaoRepository = $credito0800CartaoRepo;
    }

    /**
     * Display a listing of the Credito0800Cartao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $credito0800Cartaos = $this->credito0800CartaoRepository->all();

        return view('credito0800_cartaos.index')
            ->with('credito0800Cartaos', $credito0800Cartaos);
    }

    /**
     * Show the form for creating a new Credito0800Cartao.
     *
     * @return Response
     */
    public function create()
    {
        return view('credito0800_cartaos.create');
    }

    /**
     * Store a newly created Credito0800Cartao in storage.
     *
     * @param CreateCredito0800CartaoRequest $request
     *
     * @return Response
     */
    public function store(CreateCredito0800CartaoRequest $request)
    {
        $input = $request->all();

        $credito0800Cartao = $this->credito0800CartaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/credito0800Cartaos.singular')]));

        return redirect(route('credito0800Cartaos.index'));
    }

    /**
     * Display the specified Credito0800Cartao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $credito0800Cartao = $this->credito0800CartaoRepository->find($id);

        if (empty($credito0800Cartao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito0800Cartaos.singular')]));

            return redirect(route('credito0800Cartaos.index'));
        }

        return view('credito0800_cartaos.show')->with('credito0800Cartao', $credito0800Cartao);
    }

    /**
     * Show the form for editing the specified Credito0800Cartao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $credito0800Cartao = $this->credito0800CartaoRepository->find($id);

        if (empty($credito0800Cartao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito0800Cartaos.singular')]));

            return redirect(route('credito0800Cartaos.index'));
        }

        return view('credito0800_cartaos.edit')->with('credito0800Cartao', $credito0800Cartao);
    }

    /**
     * Update the specified Credito0800Cartao in storage.
     *
     * @param int $id
     * @param UpdateCredito0800CartaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCredito0800CartaoRequest $request)
    {
        $credito0800Cartao = $this->credito0800CartaoRepository->find($id);

        if (empty($credito0800Cartao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito0800Cartaos.singular')]));

            return redirect(route('credito0800Cartaos.index'));
        }

        $credito0800Cartao = $this->credito0800CartaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/credito0800Cartaos.singular')]));

        return redirect(route('credito0800Cartaos.index'));
    }

    /**
     * Remove the specified Credito0800Cartao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $credito0800Cartao = $this->credito0800CartaoRepository->find($id);

        if (empty($credito0800Cartao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito0800Cartaos.singular')]));

            return redirect(route('credito0800Cartaos.index'));
        }

        $this->credito0800CartaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/credito0800Cartaos.singular')]));

        return redirect(route('credito0800Cartaos.index'));
    }
}
