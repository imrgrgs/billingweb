<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCredito4003Request;
use App\Http\Requests\UpdateCredito4003Request;
use App\Repositories\Credito4003Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Credito4003Controller extends AppBaseController
{
    /** @var  Credito4003Repository */
    private $credito4003Repository;

    public function __construct(Credito4003Repository $credito4003Repo)
    {
        $this->credito4003Repository = $credito4003Repo;
    }

    /**
     * Display a listing of the Credito4003.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $credito4003s = $this->credito4003Repository->all();

        return view('credito4003s.index')
            ->with('credito4003s', $credito4003s);
    }

    /**
     * Show the form for creating a new Credito4003.
     *
     * @return Response
     */
    public function create()
    {
        return view('credito4003s.create');
    }

    /**
     * Store a newly created Credito4003 in storage.
     *
     * @param CreateCredito4003Request $request
     *
     * @return Response
     */
    public function store(CreateCredito4003Request $request)
    {
        $input = $request->all();

        $credito4003 = $this->credito4003Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/credito4003s.singular')]));

        return redirect(route('credito4003s.index'));
    }

    /**
     * Display the specified Credito4003.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $credito4003 = $this->credito4003Repository->find($id);

        if (empty($credito4003)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito4003s.singular')]));

            return redirect(route('credito4003s.index'));
        }

        return view('credito4003s.show')->with('credito4003', $credito4003);
    }

    /**
     * Show the form for editing the specified Credito4003.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $credito4003 = $this->credito4003Repository->find($id);

        if (empty($credito4003)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito4003s.singular')]));

            return redirect(route('credito4003s.index'));
        }

        return view('credito4003s.edit')->with('credito4003', $credito4003);
    }

    /**
     * Update the specified Credito4003 in storage.
     *
     * @param int $id
     * @param UpdateCredito4003Request $request
     *
     * @return Response
     */
    public function update($id, UpdateCredito4003Request $request)
    {
        $credito4003 = $this->credito4003Repository->find($id);

        if (empty($credito4003)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito4003s.singular')]));

            return redirect(route('credito4003s.index'));
        }

        $credito4003 = $this->credito4003Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/credito4003s.singular')]));

        return redirect(route('credito4003s.index'));
    }

    /**
     * Remove the specified Credito4003 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $credito4003 = $this->credito4003Repository->find($id);

        if (empty($credito4003)) {
            Flash::error(__('messages.not_found', ['model' => __('models/credito4003s.singular')]));

            return redirect(route('credito4003s.index'));
        }

        $this->credito4003Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/credito4003s.singular')]));

        return redirect(route('credito4003s.index'));
    }
}
