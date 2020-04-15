<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePinRequest;
use App\Http\Requests\UpdatePinRequest;
use App\Repositories\PinRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PinController extends AppBaseController
{
    /** @var  PinRepository */
    private $pinRepository;

    public function __construct(PinRepository $pinRepo)
    {
        $this->pinRepository = $pinRepo;
    }

    /**
     * Display a listing of the Pin.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pins = $this->pinRepository->all();

        return view('pins.index')
            ->with('pins', $pins);
    }

    /**
     * Show the form for creating a new Pin.
     *
     * @return Response
     */
    public function create()
    {
        return view('pins.create');
    }

    /**
     * Store a newly created Pin in storage.
     *
     * @param CreatePinRequest $request
     *
     * @return Response
     */
    public function store(CreatePinRequest $request)
    {
        $input = $request->all();

        $pin = $this->pinRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pins.singular')]));

        return redirect(route('pins.index'));
    }

    /**
     * Display the specified Pin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pin = $this->pinRepository->find($id);

        if (empty($pin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pins.singular')]));

            return redirect(route('pins.index'));
        }

        return view('pins.show')->with('pin', $pin);
    }

    /**
     * Show the form for editing the specified Pin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pin = $this->pinRepository->find($id);

        if (empty($pin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pins.singular')]));

            return redirect(route('pins.index'));
        }

        return view('pins.edit')->with('pin', $pin);
    }

    /**
     * Update the specified Pin in storage.
     *
     * @param int $id
     * @param UpdatePinRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePinRequest $request)
    {
        $pin = $this->pinRepository->find($id);

        if (empty($pin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pins.singular')]));

            return redirect(route('pins.index'));
        }

        $pin = $this->pinRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pins.singular')]));

        return redirect(route('pins.index'));
    }

    /**
     * Remove the specified Pin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pin = $this->pinRepository->find($id);

        if (empty($pin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pins.singular')]));

            return redirect(route('pins.index'));
        }

        $this->pinRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pins.singular')]));

        return redirect(route('pins.index'));
    }
}
