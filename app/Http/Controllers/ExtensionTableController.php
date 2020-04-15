<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExtensionTableRequest;
use App\Http\Requests\UpdateExtensionTableRequest;
use App\Repositories\ExtensionTableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ExtensionTableController extends AppBaseController
{
    /** @var  ExtensionTableRepository */
    private $extensionTableRepository;

    public function __construct(ExtensionTableRepository $extensionTableRepo)
    {
        $this->extensionTableRepository = $extensionTableRepo;
    }

    /**
     * Display a listing of the ExtensionTable.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $extensionTables = $this->extensionTableRepository->all();

        return view('extension_tables.index')
            ->with('extensionTables', $extensionTables);
    }

    /**
     * Show the form for creating a new ExtensionTable.
     *
     * @return Response
     */
    public function create()
    {
        return view('extension_tables.create');
    }

    /**
     * Store a newly created ExtensionTable in storage.
     *
     * @param CreateExtensionTableRequest $request
     *
     * @return Response
     */
    public function store(CreateExtensionTableRequest $request)
    {
        $input = $request->all();

        $extensionTable = $this->extensionTableRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/extensionTables.singular')]));

        return redirect(route('extensionTables.index'));
    }

    /**
     * Display the specified ExtensionTable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $extensionTable = $this->extensionTableRepository->find($id);

        if (empty($extensionTable)) {
            Flash::error(__('messages.not_found', ['model' => __('models/extensionTables.singular')]));

            return redirect(route('extensionTables.index'));
        }

        return view('extension_tables.show')->with('extensionTable', $extensionTable);
    }

    /**
     * Show the form for editing the specified ExtensionTable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $extensionTable = $this->extensionTableRepository->find($id);

        if (empty($extensionTable)) {
            Flash::error(__('messages.not_found', ['model' => __('models/extensionTables.singular')]));

            return redirect(route('extensionTables.index'));
        }

        return view('extension_tables.edit')->with('extensionTable', $extensionTable);
    }

    /**
     * Update the specified ExtensionTable in storage.
     *
     * @param int $id
     * @param UpdateExtensionTableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExtensionTableRequest $request)
    {
        $extensionTable = $this->extensionTableRepository->find($id);

        if (empty($extensionTable)) {
            Flash::error(__('messages.not_found', ['model' => __('models/extensionTables.singular')]));

            return redirect(route('extensionTables.index'));
        }

        $extensionTable = $this->extensionTableRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/extensionTables.singular')]));

        return redirect(route('extensionTables.index'));
    }

    /**
     * Remove the specified ExtensionTable from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $extensionTable = $this->extensionTableRepository->find($id);

        if (empty($extensionTable)) {
            Flash::error(__('messages.not_found', ['model' => __('models/extensionTables.singular')]));

            return redirect(route('extensionTables.index'));
        }

        $this->extensionTableRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/extensionTables.singular')]));

        return redirect(route('extensionTables.index'));
    }
}
