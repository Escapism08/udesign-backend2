<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateeventsAPIRequest;
use App\Http\Requests\API\UpdateeventsAPIRequest;
use App\Models\events;
use App\Repositories\eventsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class eventsController
 * @package App\Http\Controllers\API
 */

class eventsAPIController extends AppBaseController
{
    /** @var  eventsRepository */
    private $eventsRepository;

    public function __construct(eventsRepository $eventsRepo)
    {
        $this->eventsRepository = $eventsRepo;
    }

    /**
     * Display a listing of the events.
     * GET|HEAD /events
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventsRepository->pushCriteria(new RequestCriteria($request));
        $this->eventsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $events = $this->eventsRepository->all();

        return $this->sendResponse($events->toArray(), 'Events retrieved successfully');
    }

    /**
     * Store a newly created events in storage.
     * POST /events
     *
     * @param CreateeventsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateeventsAPIRequest $request)
    {
        $input = $request->all();

        $events = $this->eventsRepository->create($input);

        return $this->sendResponse($events->toArray(), 'Events saved successfully');
    }

    /**
     * Display the specified events.
     * GET|HEAD /events/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var events $events */
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            return $this->sendError('Events not found');
        }

        return $this->sendResponse($events->toArray(), 'Events retrieved successfully');
    }

    /**
     * Update the specified events in storage.
     * PUT/PATCH /events/{id}
     *
     * @param  int $id
     * @param UpdateeventsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeventsAPIRequest $request)
    {
        $input = $request->all();

        /** @var events $events */
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            return $this->sendError('Events not found');
        }

        $events = $this->eventsRepository->update($input, $id);

        return $this->sendResponse($events->toArray(), 'events updated successfully');
    }

    /**
     * Remove the specified events from storage.
     * DELETE /events/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var events $events */
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            return $this->sendError('Events not found');
        }

        $events->delete();

        return $this->sendResponse($id, 'Events deleted successfully');
    }
}
