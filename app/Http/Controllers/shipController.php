<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateshipRequest;
use App\Http\Requests\UpdateshipRequest;
use App\Repositories\shipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class shipController extends AppBaseController
{
    /** @var shipRepository $shipRepository*/
    private $shipRepository;

    public function __construct(shipRepository $shipRepo)
    {
        $this->shipRepository = $shipRepo;
    }

    /**
     * Display a listing of the ship.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ships = $this->shipRepository->all();

        return view('ships.index')
            ->with('ships', $ships);
    }

    /**
     * Show the form for creating a new ship.
     *
     * @return Response
     */
    public function create()
    {
        return view('ships.create');
    }

    /**
     * Store a newly created ship in storage.
     *
     * @param CreateshipRequest $request
     *
     * @return Response
     */
    public function store(CreateshipRequest $request)
    {
        $input = $request->all();

        $ship = $this->shipRepository->create($input);

        Flash::success('Ship saved successfully.');

        return redirect(route('ships.index'));
    }

    /**
     * Display the specified ship.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ship = $this->shipRepository->find($id);

        if (empty($ship)) {
            Flash::error('Ship not found');

            return redirect(route('ships.index'));
        }

        return view('ships.show')->with('ship', $ship);
    }

    /**
     * Show the form for editing the specified ship.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ship = $this->shipRepository->find($id);

        if (empty($ship)) {
            Flash::error('Ship not found');

            return redirect(route('ships.index'));
        }

        return view('ships.edit')->with('ship', $ship);
    }

    /**
     * Update the specified ship in storage.
     *
     * @param int $id
     * @param UpdateshipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateshipRequest $request)
    {
        $ship = $this->shipRepository->find($id);

        if (empty($ship)) {
            Flash::error('Ship not found');

            return redirect(route('ships.index'));
        }

        $ship = $this->shipRepository->update($request->all(), $id);

        Flash::success('Ship updated successfully.');

        return redirect(route('ships.index'));
    }

    /**
     * Remove the specified ship from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ship = $this->shipRepository->find($id);

        if (empty($ship)) {
            Flash::error('Ship not found');

            return redirect(route('ships.index'));
        }

        $this->shipRepository->delete($id);

        Flash::success('Ship deleted successfully.');

        return redirect(route('ships.index'));
    }
}
