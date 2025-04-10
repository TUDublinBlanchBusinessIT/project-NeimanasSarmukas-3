<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcrew_memberRequest;
use App\Http\Requests\Updatecrew_memberRequest;
use App\Repositories\crew_memberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class crew_memberController extends AppBaseController
{
    /** @var crew_memberRepository $crewMemberRepository*/
    private $crewMemberRepository;

    public function __construct(crew_memberRepository $crewMemberRepo)
    {
        $this->crewMemberRepository = $crewMemberRepo;
    }

    /**
     * Display a listing of the crew_member.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $crewMembers = $this->crewMemberRepository->all();

        return view('crew_members.index')
            ->with('crewMembers', $crewMembers);
    }

    /**
     * Show the form for creating a new crew_member.
     *
     * @return Response
     */
    public function create()
    {
        return view('crew_members.create');
    }

    /**
     * Store a newly created crew_member in storage.
     *
     * @param Createcrew_memberRequest $request
     *
     * @return Response
     */
    public function store(Createcrew_memberRequest $request)
    {
        $input = $request->all();

        $crewMember = $this->crewMemberRepository->create($input);

        Flash::success('Crew Member saved successfully.');

        return redirect(route('crewMembers.index'));
    }

    /**
     * Display the specified crew_member.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $crewMember = $this->crewMemberRepository->find($id);

        if (empty($crewMember)) {
            Flash::error('Crew Member not found');

            return redirect(route('crewMembers.index'));
        }

        return view('crew_members.show')->with('crewMember', $crewMember);
    }

    /**
     * Show the form for editing the specified crew_member.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $crewMember = $this->crewMemberRepository->find($id);

        if (empty($crewMember)) {
            Flash::error('Crew Member not found');

            return redirect(route('crewMembers.index'));
        }

        return view('crew_members.edit')->with('crewMember', $crewMember);
    }

    /**
     * Update the specified crew_member in storage.
     *
     * @param int $id
     * @param Updatecrew_memberRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecrew_memberRequest $request)
    {
        $crewMember = $this->crewMemberRepository->find($id);

        if (empty($crewMember)) {
            Flash::error('Crew Member not found');

            return redirect(route('crewMembers.index'));
        }

        $crewMember = $this->crewMemberRepository->update($request->all(), $id);

        Flash::success('Crew Member updated successfully.');

        return redirect(route('crewMembers.index'));
    }

    /**
     * Remove the specified crew_member from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $crewMember = $this->crewMemberRepository->find($id);

        if (empty($crewMember)) {
            Flash::error('Crew Member not found');

            return redirect(route('crewMembers.index'));
        }

        $this->crewMemberRepository->delete($id);

        Flash::success('Crew Member deleted successfully.');

        return redirect(route('crewMembers.index'));
    }
}
