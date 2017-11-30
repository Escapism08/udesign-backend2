<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepromotionsAPIRequest;
use App\Http\Requests\API\UpdatepromotionsAPIRequest;
use App\Models\promotions;
use App\Repositories\promotionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class promotionsController
 * @package App\Http\Controllers\API
 */

class promotionsAPIController extends AppBaseController
{
    /** @var  promotionsRepository */
    private $promotionsRepository;

    public function __construct(promotionsRepository $promotionsRepo)
    {
        $this->promotionsRepository = $promotionsRepo;
    }

    /**
     * Display a listing of the promotions.
     * GET|HEAD /promotions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->promotionsRepository->pushCriteria(new RequestCriteria($request));
        $this->promotionsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $promotions = $this->promotionsRepository->all();

        return $this->sendResponse($promotions->toArray(), 'Promotions retrieved successfully');
    }

    /**
     * Store a newly created promotions in storage.
     * POST /promotions
     *
     * @param CreatepromotionsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepromotionsAPIRequest $request)
    {
        $input = $request->all();

        $promotions = $this->promotionsRepository->create($input);

        return $this->sendResponse($promotions->toArray(), 'Promotions saved successfully');
    }

    /**
     * Display the specified promotions.
     * GET|HEAD /promotions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var promotions $promotions */
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            return $this->sendError('Promotions not found');
        }

        return $this->sendResponse($promotions->toArray(), 'Promotions retrieved successfully');
    }

    /**
     * Update the specified promotions in storage.
     * PUT/PATCH /promotions/{id}
     *
     * @param  int $id
     * @param UpdatepromotionsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepromotionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var promotions $promotions */
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            return $this->sendError('Promotions not found');
        }

        $promotions = $this->promotionsRepository->update($input, $id);

        return $this->sendResponse($promotions->toArray(), 'promotions updated successfully');
    }

    /**
     * Remove the specified promotions from storage.
     * DELETE /promotions/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var promotions $promotions */
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            return $this->sendError('Promotions not found');
        }

        $promotions->delete();

        return $this->sendResponse($id, 'Promotions deleted successfully');
    }
}
