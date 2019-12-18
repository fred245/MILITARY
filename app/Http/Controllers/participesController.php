<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateparticipesRequest;
use App\Http\Requests\UpdateparticipesRequest;
use App\Repositories\participesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Missions;
use App\Models\Soldier;

class participesController extends AppBaseController
{
    /** @var  participesRepository */
    private $participesRepository;

    public function __construct(participesRepository $participesRepo)
    {
        $this->participesRepository = $participesRepo;
    }

    /**
     * Display a listing of the participes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $sol = soldier::pluck('name','id');

        $participes = $this->participesRepository->all();

        return view('participes.index')
            ->with('participes', $participes);
    }

    /**
     * Show the form for creating a new participes.
     *
     * @return Response
     */
    public function create()
    {
        $mis = missions::pluck('name','id');
        $sil = soldier::pluck('name','id');
        return view(('participes.create'),compact('sil','mis'));
    }

    /**
     * Store a newly created participes in storage.
     *
     * @param CreateparticipesRequest $request
     *
     * @return Response
     */
    public function store(CreateparticipesRequest $request)
    {
        $input = $request->all();
        //dd($input);
        $participes = $this->participesRepository->create($input);

        Flash::success('Participes saved successfully.');

        return redirect(route('participes.index'));
    }

    /**
     * Display the specified participes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $participes = $this->participesRepository->find($id);

        if (empty($participes)) {
            Flash::error('Participes not found');

            return redirect(route('participes.index'));
        }

        return view('participes.show')->with('participes', $participes);
    }

    /**
     * Show the form for editing the specified participes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $participes = $this->participesRepository->find($id);

        if (empty($participes)) {
            Flash::error('Participes not found');

            return redirect(route('participes.index'));
        }

        return view('participes.edit')->with('participes', $participes);
    }

    /**
     * Update the specified participes in storage.
     *
     * @param int $id
     * @param UpdateparticipesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateparticipesRequest $request)
    {
        $participes = $this->participesRepository->find($id);

        if (empty($participes)) {
            Flash::error('Participes not found');

            return redirect(route('participes.index'));
        }

        $participes = $this->participesRepository->update($request->all(), $id);

        Flash::success('Participes updated successfully.');

        return redirect(route('participes.index'));
    }

    /**
     * Remove the specified participes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $participes = $this->participesRepository->find($id);

        if (empty($participes)) {
            Flash::error('Participes not found');

            return redirect(route('participes.index'));
        }

        $this->participesRepository->delete($id);

        Flash::success('Participes deleted successfully.');

        return redirect(route('participes.index'));
    }
}
