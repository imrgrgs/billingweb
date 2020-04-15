<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnuncioRequest;
use App\Http\Requests\UpdateAnuncioRequest;
use App\Repositories\AnuncioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AnuncioController extends AppBaseController
{
    /** @var  AnuncioRepository */
    private $anuncioRepository;

    public function __construct(AnuncioRepository $anuncioRepo)
    {
        $this->anuncioRepository = $anuncioRepo;
    }

    /**
     * Display a listing of the Anuncio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $anuncios = $this->anuncioRepository->all();

        return view('anuncios.index')
            ->with('anuncios', $anuncios);
    }

    /**
     * Show the form for creating a new Anuncio.
     *
     * @return Response
     */
    public function create()
    {
        return view('anuncios.create');
    }

    /**
     * Store a newly created Anuncio in storage.
     *
     * @param CreateAnuncioRequest $request
     *
     * @return Response
     */
    public function store(CreateAnuncioRequest $request)
    {
        $input = $request->all();

        $anuncio = $this->anuncioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/anuncios.singular')]));

        return redirect(route('anuncios.index'));
    }

    /**
     * Display the specified Anuncio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $anuncio = $this->anuncioRepository->find($id);

        if (empty($anuncio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/anuncios.singular')]));

            return redirect(route('anuncios.index'));
        }

        return view('anuncios.show')->with('anuncio', $anuncio);
    }

    /**
     * Show the form for editing the specified Anuncio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $anuncio = $this->anuncioRepository->find($id);

        if (empty($anuncio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/anuncios.singular')]));

            return redirect(route('anuncios.index'));
        }

        return view('anuncios.edit')->with('anuncio', $anuncio);
    }

    /**
     * Update the specified Anuncio in storage.
     *
     * @param int $id
     * @param UpdateAnuncioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnuncioRequest $request)
    {
        $anuncio = $this->anuncioRepository->find($id);

        if (empty($anuncio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/anuncios.singular')]));

            return redirect(route('anuncios.index'));
        }

        $anuncio = $this->anuncioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/anuncios.singular')]));

        return redirect(route('anuncios.index'));
    }

    /**
     * Remove the specified Anuncio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $anuncio = $this->anuncioRepository->find($id);

        if (empty($anuncio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/anuncios.singular')]));

            return redirect(route('anuncios.index'));
        }

        $this->anuncioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/anuncios.singular')]));

        return redirect(route('anuncios.index'));
    }
}
