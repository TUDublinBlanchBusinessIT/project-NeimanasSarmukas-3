<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecruiseRequest;
use App\Http\Requests\UpdatecruiseRequest;
use App\Repositories\cruiseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class cruiseController extends AppBaseController
{
    /** @var cruiseRepository $cruiseRepository*/
    private $cruiseRepository;

    public function __construct(cruiseRepository $cruiseRepo)
    {
        $this->cruiseRepository = $cruiseRepo;
    }

    /**
     * Display a listing of the cruise.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cruises = $this->cruiseRepository->all();

        return view('cruises.index')
            ->with('cruises', $cruises);
    }

    /**
     * Show the form for creating a new cruise.
     *
     * @return Response
     */
    public function create()
    {
        return view('cruises.create');
    }

    /**
     * Store a newly created cruise in storage.
     *
     * @param CreatecruiseRequest $request
     *
     * @return Response
     */
    public function store(CreatecruiseRequest $request)
    {
        $input = $request->all();

        $cruise = $this->cruiseRepository->create($input);

        Flash::success('Cruise saved successfully.');

        return redirect(route('cruises.index'));
    }

    /**
     * Display the specified cruise.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cruise = $this->cruiseRepository->find($id);

        if (empty($cruise)) {
            Flash::error('Cruise not found');

            return redirect(route('cruises.index'));
        }

        return view('cruises.show')->with('cruise', $cruise);
    }

    /**
     * Show the form for editing the specified cruise.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cruise = $this->cruiseRepository->find($id);

        if (empty($cruise)) {
            Flash::error('Cruise not found');

            return redirect(route('cruises.index'));
        }

        return view('cruises.edit')->with('cruise', $cruise);
    }

    /**
     * Update the specified cruise in storage.
     *
     * @param int $id
     * @param UpdatecruiseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecruiseRequest $request)
    {
        $cruise = $this->cruiseRepository->find($id);

        if (empty($cruise)) {
            Flash::error('Cruise not found');

            return redirect(route('cruises.index'));
        }

        $cruise = $this->cruiseRepository->update($request->all(), $id);

        Flash::success('Cruise updated successfully.');

        return redirect(route('cruises.index'));
    }

    /**
     * Remove the specified cruise from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cruise = $this->cruiseRepository->find($id);

        if (empty($cruise)) {
            Flash::error('Cruise not found');

            return redirect(route('cruises.index'));
        }

        $this->cruiseRepository->delete($id);

        Flash::success('Cruise deleted successfully.');

        return redirect(route('cruises.index'));
    }
}
