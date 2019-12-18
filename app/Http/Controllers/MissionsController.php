<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMissionsRequest;
use App\Http\Requests\UpdateMissionsRequest;
use App\Repositories\MissionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Objective;
use App\Models\Priority;

class MissionsController extends AppBaseController
{
    /** @var  MissionsRepository */
    private $missionsRepository;

    public function __construct(MissionsRepository $missionsRepo)
    {
        $this->missionsRepository = $missionsRepo;
    }

    /**
     * Display a listing of the Missions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $missions = $this->missionsRepository->all();

        return view('missions.index')
            ->with('missions', $missions);
    }

    /**
     * Show the form for creating a new Missions.
     *
     * @return Response
     */
    public function create()
    {

        $prioritys = priority::pluck('name', 'id');
        $objectives = objective::pluck('name', 'id');

        return view(('missions.create'), compact('prioritys','objectives'));
    }

    /**
     * Store a newly created Missions in storage.
     *
     * @param CreateMissionsRequest $request
     *
     * @return Response
     */
    public function store(CreateMissionsRequest $request)
    {
        $input = $request->all();

        $missions = $this->missionsRepository->create($input);

        Flash::success('Missions saved successfully.');

        return redirect(route('missions.index'));
    }

    /**
     * Display the specified Missions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $missions = $this->missionsRepository->find($id);

        if (empty($missions)) {
            Flash::error('Missions not found');

            return redirect(route('missions.index'));
        }

        return view('missions.show')->with('missions', $missions);
    }

    /**
     * Show the form for editing the specified Missions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $missions = $this->missionsRepository->find($id);

        if (empty($missions)) {
            Flash::error('Missions not found');

            return redirect(route('missions.index'));
        }

        return view('missions.edit')->with('missions', $missions);
    }

    /**
     * Update the specified Missions in storage.
     *
     * @param int $id
     * @param UpdateMissionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMissionsRequest $request)
    {
        $missions = $this->missionsRepository->find($id);

        if (empty($missions)) {
            Flash::error('Missions not found');

            return redirect(route('missions.index'));
        }

        $missions = $this->missionsRepository->update($request->all(), $id);

        Flash::success('Missions updated successfully.');

        return redirect(route('missions.index'));
    }

    /**
     * Remove the specified Missions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $missions = $this->missionsRepository->find($id);

        if (empty($missions)) {
            Flash::error('Missions not found');

            return redirect(route('missions.index'));
        }

        $this->missionsRepository->delete($id);

        Flash::success('Missions deleted successfully.');

        return redirect(route('missions.index'));
    }
}
