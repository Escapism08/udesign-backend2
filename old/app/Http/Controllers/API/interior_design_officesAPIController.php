<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createinterior_design_officesAPIRequest;
use App\Http\Requests\API\Updateinterior_design_officesAPIRequest;
use App\Models\interior_design_offices;
use App\Repositories\interior_design_officesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class interior_design_officesController
 * @package App\Http\Controllers\API
 */

class interior_design_officesAPIController extends AppBaseController
{
    /** @var  interior_design_officesRepository */
    private $interiorDesignOfficesRepository;

    public function __construct(interior_design_officesRepository $interiorDesignOfficesRepo)
    {
        $this->interiorDesignOfficesRepository = $interiorDesignOfficesRepo;
    }

    /**
     * Display a listing of the interior_design_offices.
     * GET|HEAD /interiorDesignOffices
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->interiorDesignOfficesRepository->pushCriteria(new RequestCriteria($request));
        $this->interiorDesignOfficesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->all();

        return $this->sendResponse($interiorDesignOffices->toArray(), 'Interior Design Offices retrieved successfully');
    }

    /**
     * Store a newly created interior_design_offices in storage.
     * POST /interiorDesignOffices
     *
     * @param Createinterior_design_officesAPIRequest $request
     *
     * @return Response
     */
    public function store(Createinterior_design_officesAPIRequest $request)
    {
        $input = $request->all();

        $interiorDesignOffices = $this->interiorDesignOfficesRepository->create($input);

        return $this->sendResponse($interiorDesignOffices->toArray(), 'Interior Design Offices saved successfully');
    }

    /**
     * Display the specified interior_design_offices.
     * GET|HEAD /interiorDesignOffices/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var interior_design_offices $interiorDesignOffices */
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            return $this->sendError('Interior Design Offices not found');
        }

        return $this->sendResponse($interiorDesignOffices->toArray(), 'Interior Design Offices retrieved successfully');
    }

    /**
     * Update the specified interior_design_offices in storage.
     * PUT/PATCH /interiorDesignOffices/{id}
     *
     * @param  int $id
     * @param Updateinterior_design_officesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateinterior_design_officesAPIRequest $request)
    {
        $input = $request->all();

        /** @var interior_design_offices $interiorDesignOffices */
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            return $this->sendError('Interior Design Offices not found');
        }

        $interiorDesignOffices = $this->interiorDesignOfficesRepository->update($input, $id);

        return $this->sendResponse($interiorDesignOffices->toArray(), 'interior_design_offices updated successfully');
    }

    /**
     * Remove the specified interior_design_offices from storage.
     * DELETE /interiorDesignOffices/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var interior_design_offices $interiorDesignOffices */
        $interiorDesignOffices = $this->interiorDesignOfficesRepository->findWithoutFail($id);

        if (empty($interiorDesignOffices)) {
            return $this->sendError('Interior Design Offices not found');
        }

        $interiorDesignOffices->delete();

        return $this->sendResponse($id, 'Interior Design Offices deleted successfully');
    }
}
