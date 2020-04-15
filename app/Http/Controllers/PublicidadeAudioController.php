<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePublicidadeAudioRequest;
use App\Http\Requests\UpdatePublicidadeAudioRequest;
use App\Repositories\PublicidadeAudioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PublicidadeAudioController extends AppBaseController
{
    /** @var  PublicidadeAudioRepository */
    private $publicidadeAudioRepository;

    public function __construct(PublicidadeAudioRepository $publicidadeAudioRepo)
    {
        $this->publicidadeAudioRepository = $publicidadeAudioRepo;
    }

    /**
     * Display a listing of the PublicidadeAudio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $publicidadeAudios = $this->publicidadeAudioRepository->all();

        return view('publicidade_audios.index')
            ->with('publicidadeAudios', $publicidadeAudios);
    }

    /**
     * Show the form for creating a new PublicidadeAudio.
     *
     * @return Response
     */
    public function create()
    {
        return view('publicidade_audios.create');
    }

    /**
     * Store a newly created PublicidadeAudio in storage.
     *
     * @param CreatePublicidadeAudioRequest $request
     *
     * @return Response
     */
    public function store(CreatePublicidadeAudioRequest $request)
    {
        $input = $request->all();

        $publicidadeAudio = $this->publicidadeAudioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/publicidadeAudios.singular')]));

        return redirect(route('publicidadeAudios.index'));
    }

    /**
     * Display the specified PublicidadeAudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publicidadeAudio = $this->publicidadeAudioRepository->find($id);

        if (empty($publicidadeAudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeAudios.singular')]));

            return redirect(route('publicidadeAudios.index'));
        }

        return view('publicidade_audios.show')->with('publicidadeAudio', $publicidadeAudio);
    }

    /**
     * Show the form for editing the specified PublicidadeAudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publicidadeAudio = $this->publicidadeAudioRepository->find($id);

        if (empty($publicidadeAudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeAudios.singular')]));

            return redirect(route('publicidadeAudios.index'));
        }

        return view('publicidade_audios.edit')->with('publicidadeAudio', $publicidadeAudio);
    }

    /**
     * Update the specified PublicidadeAudio in storage.
     *
     * @param int $id
     * @param UpdatePublicidadeAudioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePublicidadeAudioRequest $request)
    {
        $publicidadeAudio = $this->publicidadeAudioRepository->find($id);

        if (empty($publicidadeAudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeAudios.singular')]));

            return redirect(route('publicidadeAudios.index'));
        }

        $publicidadeAudio = $this->publicidadeAudioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/publicidadeAudios.singular')]));

        return redirect(route('publicidadeAudios.index'));
    }

    /**
     * Remove the specified PublicidadeAudio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publicidadeAudio = $this->publicidadeAudioRepository->find($id);

        if (empty($publicidadeAudio)) {
            Flash::error(__('messages.not_found', ['model' => __('models/publicidadeAudios.singular')]));

            return redirect(route('publicidadeAudios.index'));
        }

        $this->publicidadeAudioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/publicidadeAudios.singular')]));

        return redirect(route('publicidadeAudios.index'));
    }
}
