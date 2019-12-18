<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObjectiveRequest;
use App\Http\Requests\UpdateObjectiveRequest;
use App\Repositories\ObjectiveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ObjectiveController extends AppBaseController
{
    /** @var  ObjectiveRepository */
    private $objectiveRepository;

    public function __construct(ObjectiveRepository $objectiveRepo)
    {
        $this->objectiveRepository = $objectiveRepo;
    }

    /**
     * Display a listing of the Objective.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $objectives = $this->objectiveRepository->all();

        return view('objectives.index')
            ->with('objectives', $objectives);
    }

    /**
     * Show the form for creating a new Objective.
     *
     * @return Response
     */
    public function create()
    {
        return view('objectives.create');
    }

    /**
     * Store a newly created Objective in storage.
     *
     * @param CreateObjectiveRequest $request
     *
     * @return Response
     */
    public function store(CreateObjectiveRequest $request)
    {
        $input = $request->all();

        $objective = $this->objectiveRepository->create($input);

        Flash::success('Objective saved successfully.');

        return redirect(route('objectives.index'));
    }

    /**
     * Display the specified Objective.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $objective = $this->objectiveRepository->find($id);

        if (empty($objective)) {
            Flash::error('Objective not found');

            return redirect(route('objectives.index'));
        }

        return view('objectives.show')->with('objective', $objective);
    }

    /**
     * Show the form for editing the specified Objective.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $objective = $this->objectiveRepository->find($id);

        if (empty($objective)) {
            Flash::error('Objective not found');

            return redirect(route('objectives.index'));
        }

        return view('objectives.edit')->with('objective', $objective);
    }

    /**
     * Update the specified Objective in storage.
     *
     * @param int $id
     * @param UpdateObjectiveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObjectiveRequest $request)
    {
        $objective = $this->objectiveRepository->find($id);

        if (empty($objective)) {
            Flash::error('Objective not found');

            return redirect(route('objectives.index'));
        }

        $objective = $this->objectiveRepository->update($request->all(), $id);

        Flash::success('Objective updated successfully.');

        return redirect(route('objectives.index'));
    }

    /**
     * Remove the specified Objective from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $objective = $this->objectiveRepository->find($id);

        if (empty($objective)) {
            Flash::error('Objective not found');

            return redirect(route('objectives.index'));
        }

        $this->objectiveRepository->delete($id);

        Flash::success('Objective deleted successfully.');

        return redirect(route('objectives.index'));
    }
}
