<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepackagesAPIRequest;
use App\Http\Requests\API\UpdatepackagesAPIRequest;
use App\Models\packages;
use App\Repositories\packagesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class packagesController
 * @package App\Http\Controllers\API
 */

class packagesAPIController extends AppBaseController
{
    /** @var  packagesRepository */
    private $packagesRepository;

    public function __construct(packagesRepository $packagesRepo)
    {
        $this->packagesRepository = $packagesRepo;
    }

    /**
     * Display a listing of the packages.
     * GET|HEAD /packages
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packagesRepository->pushCriteria(new RequestCriteria($request));
        $this->packagesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $packages = $this->packagesRepository->all();

        return $this->sendResponse($packages->toArray(), 'Packages retrieved successfully');
    }

    /**
     * Store a newly created packages in storage.
     * POST /packages
     *
     * @param CreatepackagesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepackagesAPIRequest $request)
    {
        $input = $request->all();

        $packages = $this->packagesRepository->create($input);

        return $this->sendResponse($packages->toArray(), 'Packages saved successfully');
    }

    /**
     * Display the specified packages.
     * GET|HEAD /packages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var packages $packages */
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            return $this->sendError('Packages not found');
        }

        return $this->sendResponse($packages->toArray(), 'Packages retrieved successfully');
    }

    /**
     * Update the specified packages in storage.
     * PUT/PATCH /packages/{id}
     *
     * @param  int $id
     * @param UpdatepackagesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepackagesAPIRequest $request)
    {
        $input = $request->all();

        /** @var packages $packages */
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            return $this->sendError('Packages not found');
        }

        $packages = $this->packagesRepository->update($input, $id);

        return $this->sendResponse($packages->toArray(), 'packages updated successfully');
    }

    /**
     * Remove the specified packages from storage.
     * DELETE /packages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var packages $packages */
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            return $this->sendError('Packages not found');
        }

        $packages->delete();

        return $this->sendResponse($id, 'Packages deleted successfully');
    }
}
