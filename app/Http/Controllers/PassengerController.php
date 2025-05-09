<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePassengerRequest;
use App\Http\Requests\UpdatePassengerRequest;
use App\Repositories\PassengerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Auth;

class PassengerController extends AppBaseController
{
    /** @var PassengerRepository $passengerRepository*/
    private $passengerRepository;

    public function __construct(PassengerRepository $passengerRepo)
    {
        $this->passengerRepository = $passengerRepo;
    }

    /**
     * Display a listing of the Passenger.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $passengers = $this->passengerRepository->all();

        return view('passengers.index')
            ->with('passengers', $passengers);
    }

    /**
     * Show the form for creating a new Passenger.
     *
     * @return Response
     */
    public function create()
    {
        return view('passengers.create');
    }

    /**
     * Store a newly created Passenger in storage.
     *
     * @param CreatePassengerRequest $request
     *
     * @return Response
     */
    public function store(CreatePassengerRequest $request)
    {
        $input = $request->all();

        $passenger = $this->passengerRepository->create($input);

        Flash::success('Passenger saved successfully.');

        return redirect(route('passengers.index'));
    }

    /**
     * Display the specified Passenger.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $passenger = $this->passengerRepository->find($id);

        if (empty($passenger)) {
            Flash::error('Passenger not found');

            return redirect(route('passengers.index'));
        }

        return view('passengers.show')->with('passenger', $passenger);
    }

    /**
     * Show the form for editing the specified Passenger.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $passenger = $this->passengerRepository->find($id);

        if (empty($passenger)) {
            Flash::error('Passenger not found');

            return redirect(route('passengers.index'));
        }

        return view('passengers.edit')->with('passenger', $passenger);
    }

    /**
     * Update the specified Passenger in storage.
     *
     * @param int $id
     * @param UpdatePassengerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePassengerRequest $request)
    {
        $passenger = $this->passengerRepository->find($id);

        if (empty($passenger)) {
            Flash::error('Passenger not found');

            return redirect(route('passengers.index'));
        }

        $passenger = $this->passengerRepository->update($request->all(), $id);

        Flash::success('Passenger updated successfully.');

        return redirect(route('passengers.index'));
    }

    /**
     * Remove the specified Passenger from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $passenger = $this->passengerRepository->find($id);

        if (empty($passenger)) {
            Flash::error('Passenger not found');

            return redirect(route('passengers.index'));
        }

        $this->passengerRepository->delete($id);

        Flash::success('Passenger deleted successfully.');

        return redirect(route('passengers.index'));
    }

}
