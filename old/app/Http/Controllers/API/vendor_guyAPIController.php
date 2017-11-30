<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createvendor_guyAPIRequest;
use App\Http\Requests\API\Updatevendor_guyAPIRequest;
use App\Models\vendor_guy;
use App\Repositories\vendor_guyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class vendor_guyController
 * @package App\Http\Controllers\API
 */

class vendor_guyAPIController extends AppBaseController
{
    /** @var  vendor_guyRepository */
    private $vendorGuyRepository;

    public function __construct(vendor_guyRepository $vendorGuyRepo)
    {
        $this->vendorGuyRepository = $vendorGuyRepo;
    }

    /**
     * Display a listing of the vendor_guy.
     * GET|HEAD /vendorGuys
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendorGuyRepository->pushCriteria(new RequestCriteria($request));
        $this->vendorGuyRepository->pushCriteria(new LimitOffsetCriteria($request));
        $vendorGuys = $this->vendorGuyRepository->all();

        return $this->sendResponse($vendorGuys->toArray(), 'Vendor Guys retrieved successfully');
    }

    /**
     * Store a newly created vendor_guy in storage.
     * POST /vendorGuys
     *
     * @param Createvendor_guyAPIRequest $request
     *
     * @return Response
     */
    public function store(Createvendor_guyAPIRequest $request)
    {
        $input = $request->all();

        $vendorGuys = $this->vendorGuyRepository->create($input);

        return $this->sendResponse($vendorGuys->toArray(), 'Vendor Guy saved successfully');
    }

    /**
     * Display the specified vendor_guy.
     * GET|HEAD /vendorGuys/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var vendor_guy $vendorGuy */
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            return $this->sendError('Vendor Guy not found');
        }

        return $this->sendResponse($vendorGuy->toArray(), 'Vendor Guy retrieved successfully');
    }

    /**
     * Update the specified vendor_guy in storage.
     * PUT/PATCH /vendorGuys/{id}
     *
     * @param  int $id
     * @param Updatevendor_guyAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevendor_guyAPIRequest $request)
    {
        $input = $request->all();

        /** @var vendor_guy $vendorGuy */
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            return $this->sendError('Vendor Guy not found');
        }

        $vendorGuy = $this->vendorGuyRepository->update($input, $id);

        return $this->sendResponse($vendorGuy->toArray(), 'vendor_guy updated successfully');
    }

    /**
     * Remove the specified vendor_guy from storage.
     * DELETE /vendorGuys/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var vendor_guy $vendorGuy */
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            return $this->sendError('Vendor Guy not found');
        }

        $vendorGuy->delete();

        return $this->sendResponse($id, 'Vendor Guy deleted successfully');
    }
}
