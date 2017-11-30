<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatevendorsAPIRequest;
use App\Http\Requests\API\UpdatevendorsAPIRequest;
use App\Models\vendors;
use App\Repositories\vendorsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class vendorsController
 * @package App\Http\Controllers\API
 */

class vendorsAPIController extends AppBaseController
{
    /** @var  vendorsRepository */
    private $vendorsRepository;

    public function __construct(vendorsRepository $vendorsRepo)
    {
        $this->vendorsRepository = $vendorsRepo;
    }

    /**
     * Display a listing of the vendors.
     * GET|HEAD /vendors
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendorsRepository->pushCriteria(new RequestCriteria($request));
        $this->vendorsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $vendors = $this->vendorsRepository->all();

        return $this->sendResponse($vendors->toArray(), 'Vendors retrieved successfully');
    }

    /**
     * Store a newly created vendors in storage.
     * POST /vendors
     *
     * @param CreatevendorsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatevendorsAPIRequest $request)
    {
        $input = $request->all();

        $vendors = $this->vendorsRepository->create($input);

        return $this->sendResponse($vendors->toArray(), 'Vendors saved successfully');
    }

    /**
     * Display the specified vendors.
     * GET|HEAD /vendors/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var vendors $vendors */
        $vendors = $this->vendorsRepository->findWithoutFail($id);

        if (empty($vendors)) {
            return $this->sendError('Vendors not found');
        }

        return $this->sendResponse($vendors->toArray(), 'Vendors retrieved successfully');
    }

    /**
     * Update the specified vendors in storage.
     * PUT/PATCH /vendors/{id}
     *
     * @param  int $id
     * @param UpdatevendorsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendorsAPIRequest $request)
    {
        $input = $request->all();

        /** @var vendors $vendors */
        $vendors = $this->vendorsRepository->findWithoutFail($id);

        if (empty($vendors)) {
            return $this->sendError('Vendors not found');
        }

        $vendors = $this->vendorsRepository->update($input, $id);

        return $this->sendResponse($vendors->toArray(), 'vendors updated successfully');
    }

    /**
     * Remove the specified vendors from storage.
     * DELETE /vendors/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var vendors $vendors */
        $vendors = $this->vendorsRepository->findWithoutFail($id);

        if (empty($vendors)) {
            return $this->sendError('Vendors not found');
        }

        $vendors->delete();

        return $this->sendResponse($id, 'Vendors deleted successfully');
    }
}
