<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParBoletoRevRequest;
use App\Http\Requests\UpdateParBoletoRevRequest;
use App\Repositories\ParBoletoRevRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ParBoletoRevController extends AppBaseController
{
    /** @var  ParBoletoRevRepository */
    private $parBoletoRevRepository;

    public function __construct(ParBoletoRevRepository $parBoletoRevRepo)
    {
        $this->parBoletoRevRepository = $parBoletoRevRepo;
    }

    /**
     * Display a listing of the ParBoletoRev.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parBoletoRevs = $this->parBoletoRevRepository->all();

        return view('par_boleto_revs.index')
            ->with('parBoletoRevs', $parBoletoRevs);
    }

    /**
     * Show the form for creating a new ParBoletoRev.
     *
     * @return Response
     */
    public function create()
    {
        return view('par_boleto_revs.create');
    }

    /**
     * Store a newly created ParBoletoRev in storage.
     *
     * @param CreateParBoletoRevRequest $request
     *
     * @return Response
     */
    public function store(CreateParBoletoRevRequest $request)
    {
        $input = $request->all();

        $parBoletoRev = $this->parBoletoRevRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/parBoletoRevs.singular')]));

        return redirect(route('parBoletoRevs.index'));
    }

    /**
     * Display the specified ParBoletoRev.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parBoletoRev = $this->parBoletoRevRepository->find($id);

        if (empty($parBoletoRev)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletoRevs.singular')]));

            return redirect(route('parBoletoRevs.index'));
        }

        return view('par_boleto_revs.show')->with('parBoletoRev', $parBoletoRev);
    }

    /**
     * Show the form for editing the specified ParBoletoRev.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parBoletoRev = $this->parBoletoRevRepository->find($id);

        if (empty($parBoletoRev)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletoRevs.singular')]));

            return redirect(route('parBoletoRevs.index'));
        }

        return view('par_boleto_revs.edit')->with('parBoletoRev', $parBoletoRev);
    }

    /**
     * Update the specified ParBoletoRev in storage.
     *
     * @param int $id
     * @param UpdateParBoletoRevRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParBoletoRevRequest $request)
    {
        $parBoletoRev = $this->parBoletoRevRepository->find($id);

        if (empty($parBoletoRev)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletoRevs.singular')]));

            return redirect(route('parBoletoRevs.index'));
        }

        $parBoletoRev = $this->parBoletoRevRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/parBoletoRevs.singular')]));

        return redirect(route('parBoletoRevs.index'));
    }

    /**
     * Remove the specified ParBoletoRev from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parBoletoRev = $this->parBoletoRevRepository->find($id);

        if (empty($parBoletoRev)) {
            Flash::error(__('messages.not_found', ['model' => __('models/parBoletoRevs.singular')]));

            return redirect(route('parBoletoRevs.index'));
        }

        $this->parBoletoRevRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/parBoletoRevs.singular')]));

        return redirect(route('parBoletoRevs.index'));
    }
}
