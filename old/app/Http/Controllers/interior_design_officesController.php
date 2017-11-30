<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createinterior_design_officesRequest;
use App\Http\Requests\Updateinterior_design_officesRequest;
use App\Repositories\interior_design_officesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class interior_design_officesController extends AppBaseController
{
    /** @var  interior_design_officesRepository */
    private $interiorDesignOfficesRepository;

    public function __construct(interior_design_officesRepository $interiorDesignOfficesRepo)
    {
        $this->interiorDesignOfficesRepository = $interiorDesignOfficesRepo;
    }

    /**
     * Display a listing of the interior_design_offices.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->interiorDesignOfficesRepository->pushCriteria(new RequestCriteria($request));
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->all();

        return view('interior_design_offices.index')
            ->with('interiorDesignOffices', $interiorDesignOffices);
    }

    /**
     * Show the form for creating a new interior_design_offices.
     *
     * @return Response
     */
    public function create()
    {
        return view('interior_design_offices.create');
    }

    /**
     * Store a newly created interior_design_offices in storage.
     *
     * @param Createinterior_design_officesRequest $request
     *
     * @return Response
     */
    public function store(Createinterior_design_officesRequest $request)
    {
        $input = $request->all();

        $interiorDesignOffices = $this->interiorDesignOfficesRepository->create($input);

        Flash::success('Interior Design Offices saved successfully.');

        return redirect(route('interiorDesignOffices.index'));
    }

    /**
     * Display the specified interior_design_offices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            Flash::error('Interior Design Offices not found');

            return redirect(route('interiorDesignOffices.index'));
        }

        return view('interior_design_offices.show')->with('interiorDesignOffices', $interiorDesignOffices);
    }

    /**
     * Show the form for editing the specified interior_design_offices.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            Flash::error('Interior Design Offices not found');

            return redirect(route('interiorDesignOffices.index'));
        }

        return view('interior_design_offices.edit')->with('interiorDesignOffices', $interiorDesignOffices);
    }

    /**
     * Update the specified interior_design_offices in storage.
     *
     * @param  int              $id
     * @param Updateinterior_design_officesRequest $request
     *
     * @return Response
     */
    public function update($id, Updateinterior_design_officesRequest $request)
    {
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            Flash::error('Interior Design Offices not found');

            return redirect(route('interiorDesignOffices.index'));
        }

        $interiorDesignOffices = $this->interiorDesignOfficesRepository->update($request->all(), $id);

        Flash::success('Interior Design Offices updated successfully.');

        return redirect(route('interiorDesignOffices.index'));
    }

    /**
     * Remove the specified interior_design_offices from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            Flash::error('Interior Design Offices not found');

            return redirect(route('interiorDesignOffices.index'));
        }

        $this->interiorDesignOfficesRepository->delete($id);

        Flash::success('Interior Design Offices deleted successfully.');

        return redirect(route('interiorDesignOffices.index'));
    }
}
