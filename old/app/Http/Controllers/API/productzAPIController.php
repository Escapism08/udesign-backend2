<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateproductzAPIRequest;
use App\Http\Requests\API\UpdateproductzAPIRequest;
use App\Models\productz;
use App\Repositories\productzRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class productzController
 * @package App\Http\Controllers\API
 */

class productzAPIController extends AppBaseController
{
    /** @var  productzRepository */
    private $productzRepository;

    public function __construct(productzRepository $productzRepo)
    {
        $this->productzRepository = $productzRepo;
    }

    /**
     * Display a listing of the productz.
     * GET|HEAD /productzs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productzRepository->pushCriteria(new RequestCriteria($request));
        $this->productzRepository->pushCriteria(new LimitOffsetCriteria($request));
        $productzs = $this->productzRepository->all();

        return $this->sendResponse($productzs->toArray(), 'Productzs retrieved successfully');
    }

    /**
     * Store a newly created productz in storage.
     * POST /productzs
     *
     * @param CreateproductzAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateproductzAPIRequest $request)
    {
        $input = $request->all();

        $productzs = $this->productzRepository->create($input);

        return $this->sendResponse($productzs->toArray(), 'Productz saved successfully');
    }

    /**
     * Display the specified productz.
     * GET|HEAD /productzs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var productz $productz */
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            return $this->sendError('Productz not found');
        }

        return $this->sendResponse($productz->toArray(), 'Productz retrieved successfully');
    }

    /**
     * Update the specified productz in storage.
     * PUT/PATCH /productzs/{id}
     *
     * @param  int $id
     * @param UpdateproductzAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductzAPIRequest $request)
    {
        $input = $request->all();

        /** @var productz $productz */
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            return $this->sendError('Productz not found');
        }

        $productz = $this->productzRepository->update($input, $id);

        return $this->sendResponse($productz->toArray(), 'productz updated successfully');
    }

    /**
     * Remove the specified productz from storage.
     * DELETE /productzs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var productz $productz */
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            return $this->sendError('Productz not found');
        }

        $productz->delete();

        return $this->sendResponse($id, 'Productz deleted successfully');
    }
}
