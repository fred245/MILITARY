<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSoldierRequest;
use App\Http\Requests\UpdateSoldierRequest;
use App\Repositories\SoldierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Grade;
use App\Models\Department;

class SoldierController extends AppBaseController
{
    /** @var  SoldierRepository */
    private $soldierRepository;

    public function __construct(SoldierRepository $soldierRepo)
    {
        $this->soldierRepository = $soldierRepo;
    }

    /**
     * Display a listing of the Soldier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $soldiers = $this->soldierRepository->all();

        return view('soldiers.index')
            ->with('soldiers', $soldiers);
    }

    /**
     * Show the form for creating a new Soldier.
     *
     * @return Response
     */
    public function create()
    {
        $grades = grade::pluck('name' , 'id');
        $departments = department::pluck('name', 'id');

        return view(('soldiers.create'),compact('departments','grades'));
    }

    /**
     * Store a newly created Soldier in storage.
     *
     * @param CreateSoldierRequest $request
     *
     * @return Response
     */
    public function store(CreateSoldierRequest $request)
    {
        $input = $request->all();

        $soldier = $this->soldierRepository->create($input);

        Flash::success('Soldier saved successfully.');

        return redirect(route('soldiers.index'));
    }

    /**
     * Display the specified Soldier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soldier = $this->soldierRepository->find($id);

        if (empty($soldier)) {
            Flash::error('Soldier not found');

            return redirect(route('soldiers.index'));
        }

        return view('soldiers.show')->with('soldier', $soldier);
    }

    /**
     * Show the form for editing the specified Soldier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soldier = $this->soldierRepository->find($id);

        if (empty($soldier)) {
            Flash::error('Soldier not found');

            return redirect(route('soldiers.index'));
        }

        return view('soldiers.edit')->with('soldier', $soldier);
    }

    /**
     * Update the specified Soldier in storage.
     *
     * @param int $id
     * @param UpdateSoldierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSoldierRequest $request)
    {
        $soldier = $this->soldierRepository->find($id);

        if (empty($soldier)) {
            Flash::error('Soldier not found');

            return redirect(route('soldiers.index'));
        }

        $soldier = $this->soldierRepository->update($request->all(), $id);

        Flash::success('Soldier updated successfully.');

        return redirect(route('soldiers.index'));
    }

    /**
     * Remove the specified Soldier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soldier = $this->soldierRepository->find($id);

        if (empty($soldier)) {
            Flash::error('Soldier not found');

            return redirect(route('soldiers.index'));
        }

        $this->soldierRepository->delete($id);

        Flash::success('Soldier deleted successfully.');

        return redirect(route('soldiers.index'));
    }
}
