<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateadvertismentAPIRequest;
use App\Http\Requests\API\UpdateadvertismentAPIRequest;
use App\Models\advertisment;
use App\Repositories\advertismentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class advertismentController
 * @package App\Http\Controllers\API
 */

class advertismentAPIController extends AppBaseController
{
    /** @var  advertismentRepository */
    private $advertismentRepository;

    public function __construct(advertismentRepository $advertismentRepo)
    {
        $this->advertismentRepository = $advertismentRepo;
    }

    /**
     * Display a listing of the advertisment.
     * GET|HEAD /advertisments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advertismentRepository->pushCriteria(new RequestCriteria($request));
        $this->advertismentRepository->pushCriteria(new LimitOffsetCriteria($request));
        $advertisments = $this->advertismentRepository->all();

        return $this->sendResponse($advertisments->toArray(), 'Advertisments retrieved successfully');
    }

    /**
     * Store a newly created advertisment in storage.
     * POST /advertisments
     *
     * @param CreateadvertismentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateadvertismentAPIRequest $request)
    {
        $input = $request->all();

        $advertisments = $this->advertismentRepository->create($input);

        return $this->sendResponse($advertisments->toArray(), 'Advertisment saved successfully');
    }

    /**
     * Display the specified advertisment.
     * GET|HEAD /advertisments/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var advertisment $advertisment */
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            return $this->sendError('Advertisment not found');
        }

        return $this->sendResponse($advertisment->toArray(), 'Advertisment retrieved successfully');
    }

    /**
     * Update the specified advertisment in storage.
     * PUT/PATCH /advertisments/{id}
     *
     * @param  int $id
     * @param UpdateadvertismentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadvertismentAPIRequest $request)
    {
        $input = $request->all();

        /** @var advertisment $advertisment */
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            return $this->sendError('Advertisment not found');
        }

        $advertisment = $this->advertismentRepository->update($input, $id);

        return $this->sendResponse($advertisment->toArray(), 'advertisment updated successfully');
    }

    /**
     * Remove the specified advertisment from storage.
     * DELETE /advertisments/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var advertisment $advertisment */
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            return $this->sendError('Advertisment not found');
        }

        $advertisment->delete();

        return $this->sendResponse($id, 'Advertisment deleted successfully');
    }
}
