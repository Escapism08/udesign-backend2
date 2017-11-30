<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createnew_productAPIRequest;
use App\Http\Requests\API\Updatenew_productAPIRequest;
use App\Models\new_product;
use App\Repositories\new_productRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class new_productController
 * @package App\Http\Controllers\API
 */

class new_productAPIController extends AppBaseController
{
    /** @var  new_productRepository */
    private $newProductRepository;

    public function __construct(new_productRepository $newProductRepo)
    {
        $this->newProductRepository = $newProductRepo;
    }

    /**
     * Display a listing of the new_product.
     * GET|HEAD /newProducts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->newProductRepository->pushCriteria(new RequestCriteria($request));
        $this->newProductRepository->pushCriteria(new LimitOffsetCriteria($request));
        $newProducts = $this->newProductRepository->all();

        return $this->sendResponse($newProducts->toArray(), 'New Products retrieved successfully');
    }

    /**
     * Store a newly created new_product in storage.
     * POST /newProducts
     *
     * @param Createnew_productAPIRequest $request
     *
     * @return Response
     */
    public function store(Createnew_productAPIRequest $request)
    {
        $input = $request->all();

        $newProducts = $this->newProductRepository->create($input);

        return $this->sendResponse($newProducts->toArray(), 'New Product saved successfully');
    }

    /**
     * Display the specified new_product.
     * GET|HEAD /newProducts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var new_product $newProduct */
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            return $this->sendError('New Product not found');
        }

        return $this->sendResponse($newProduct->toArray(), 'New Product retrieved successfully');
    }

    /**
     * Update the specified new_product in storage.
     * PUT/PATCH /newProducts/{id}
     *
     * @param  int $id
     * @param Updatenew_productAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatenew_productAPIRequest $request)
    {
        $input = $request->all();

        /** @var new_product $newProduct */
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            return $this->sendError('New Product not found');
        }

        $newProduct = $this->newProductRepository->update($input, $id);

        return $this->sendResponse($newProduct->toArray(), 'new_product updated successfully');
    }

    /**
     * Remove the specified new_product from storage.
     * DELETE /newProducts/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var new_product $newProduct */
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            return $this->sendError('New Product not found');
        }

        $newProduct->delete();

        return $this->sendResponse($id, 'New Product deleted successfully');
    }
}
