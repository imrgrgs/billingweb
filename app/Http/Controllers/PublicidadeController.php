<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicidadeRequest;
use App\Http\Requests\UpdatePublicidadeRequest;
use App\Repositories\PublicidadeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PublicidadeController extends AppBaseController
{
    /** @var  PublicidadeRepository */
    private $publicidadeRepository;

    public function __construct(PublicidadeRepository $publicidadeRepo)
    {
        $this->publicidadeRepository = $publicidadeRepo;
    }

    /**
     * Display a listing of the Publicidade.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $publicidades = $this->publicidadeRepository->all();

        return view('publicidades.index')
            ->with('publicidades', $publicidades);
    }

    /**
     * Show the form for creating a new Publicidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('publicidades.create');
    }

    /**
     * Store a newly created Publicidade in storage.
     *
     * @param CreatePublicidadeRequest $request
     *
     * @return Response
     */
    public function store(CreatePublicidadeRequest $request)
    {
        $input = $request->all();

        $publicidade = $this->publicidadeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/publicidades.singular')]));

        return redirect(route('publicidades.index'));
    }

    /**
     * Display the specified Publicidade.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publicidade = $this->publicidadeRepository->find($id);

        if (empty($publicidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidades.singular')]));

            return redirect(route('publicidades.index'));
        }

        return view('publicidades.show')->with('publicidade', $publicidade);
    }

    /**
     * Show the form for editing the specified Publicidade.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publicidade = $this->publicidadeRepository->find($id);

        if (empty($publicidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidades.singular')]));

            return redirect(route('publicidades.index'));
        }

        return view('publicidades.edit')->with('publicidade', $publicidade);
    }

    /**
     * Update the specified Publicidade in storage.
     *
     * @param int $id
     * @param UpdatePublicidadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePublicidadeRequest $request)
    {
        $publicidade = $this->publicidadeRepository->find($id);

        if (empty($publicidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidades.singular')]));

            return redirect(route('publicidades.index'));
        }

        $publicidade = $this->publicidadeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/publicidades.singular')]));

        return redirect(route('publicidades.index'));
    }

    /**
     * Remove the specified Publicidade from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publicidade = $this->publicidadeRepository->find($id);

        if (empty($publicidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidades.singular')]));

            return redirect(route('publicidades.index'));
        }

        $this->publicidadeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/publicidades.singular')]));

        return redirect(route('publicidades.index'));
    }
}
