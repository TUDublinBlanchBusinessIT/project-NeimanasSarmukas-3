<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateportRequest;
use App\Http\Requests\UpdateportRequest;
use App\Repositories\portRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class portController extends AppBaseController
{
    /** @var portRepository $portRepository*/
    private $portRepository;

    public function __construct(portRepository $portRepo)
    {
        $this->portRepository = $portRepo;
    }

    /**
     * Display a listing of the port.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ports = $this->portRepository->all();

        return view('ports.index')
            ->with('ports', $ports);
    }

    /**
     * Show the form for creating a new port.
     *
     * @return Response
     */
    public function create()
    {
        return view('ports.create');
    }

    /**
     * Store a newly created port in storage.
     *
     * @param CreateportRequest $request
     *
     * @return Response
     */
    public function store(CreateportRequest $request)
    {
        $input = $request->all();

        $port = $this->portRepository->create($input);

        Flash::success('Port saved successfully.');

        return redirect(route('ports.index'));
    }

    /**
     * Display the specified port.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $port = $this->portRepository->find($id);

        if (empty($port)) {
            Flash::error('Port not found');

            return redirect(route('ports.index'));
        }

        return view('ports.show')->with('port', $port);
    }

    /**
     * Show the form for editing the specified port.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $port = $this->portRepository->find($id);

        if (empty($port)) {
            Flash::error('Port not found');

            return redirect(route('ports.index'));
        }

        return view('ports.edit')->with('port', $port);
    }

    /**
     * Update the specified port in storage.
     *
     * @param int $id
     * @param UpdateportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateportRequest $request)
    {
        $port = $this->portRepository->find($id);

        if (empty($port)) {
            Flash::error('Port not found');

            return redirect(route('ports.index'));
        }

        $port = $this->portRepository->update($request->all(), $id);

        Flash::success('Port updated successfully.');

        return redirect(route('ports.index'));
    }

    /**
     * Remove the specified port from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $port = $this->portRepository->find($id);

        if (empty($port)) {
            Flash::error('Port not found');

            return redirect(route('ports.index'));
        }

        $this->portRepository->delete($id);

        Flash::success('Port deleted successfully.');

        return redirect(route('ports.index'));
    }
}
