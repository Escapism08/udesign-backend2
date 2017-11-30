<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatebrandAPIRequest;
use App\Http\Requests\API\UpdatebrandAPIRequest;
use App\Models\brand;
use App\Repositories\brandRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class brandController
 * @package App\Http\Controllers\API
 */

class brandAPIController extends AppBaseController
{
    /** @var  brandRepository */
    private $brandRepository;

    public function __construct(brandRepository $brandRepo)
    {
        $this->brandRepository = $brandRepo;
    }

    /**
     * Display a listing of the brand.
     * GET|HEAD /brands
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->brandRepository->pushCriteria(new RequestCriteria($request));
        $this->brandRepository->pushCriteria(new LimitOffsetCriteria($request));
        $brands = $this->brandRepository->all();

        return $this->sendResponse($brands->toArray(), 'Brands retrieved successfully');
    }

    /**
     * Store a newly created brand in storage.
     * POST /brands
     *
     * @param CreatebrandAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatebrandAPIRequest $request)
    {
        $input = $request->all();

        $brands = $this->brandRepository->create($input);

        return $this->sendResponse($brands->toArray(), 'Brand saved successfully');
    }

    /**
     * Display the specified brand.
     * GET|HEAD /brands/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var brand $brand */
        $brand = $this->brandRepository->findWithoutFail($id);

        if (empty($brand)) {
            return $this->sendError('Brand not found');
        }

        return $this->sendResponse($brand->toArray(), 'Brand retrieved successfully');
    }

    /**
     * Update the specified brand in storage.
     * PUT/PATCH /brands/{id}
     *
     * @param  int $id
     * @param UpdatebrandAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebrandAPIRequest $request)
    {
        $input = $request->all();

        /** @var brand $brand */
        $brand = $this->brandRepository->findWithoutFail($id);

        if (empty($brand)) {
            return $this->sendError('Brand not found');
        }

        $brand = $this->brandRepository->update($input, $id);

        return $this->sendResponse($brand->toArray(), 'brand updated successfully');
    }

    /**
     * Remove the specified brand from storage.
     * DELETE /brands/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var brand $brand */
        $brand = $this->brandRepository->findWithoutFail($id);

        if (empty($brand)) {
            return $this->sendError('Brand not found');
        }

        $brand->delete();

        return $this->sendResponse($id, 'Brand deleted successfully');
    }
}
