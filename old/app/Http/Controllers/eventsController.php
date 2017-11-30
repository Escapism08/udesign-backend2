<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Repositories\eventsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class eventsController extends AppBaseController
{
    /** @var  eventsRepository */
    private $eventsRepository;

    public function __construct(eventsRepository $eventsRepo)
    {
        $this->eventsRepository = $eventsRepo;
    }

    /**
     * Display a listing of the events.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventsRepository->pushCriteria(new RequestCriteria($request));
        $events = $this->eventsRepository->all();

        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new events.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created events in storage.
     *
     * @param CreateeventsRequest $request
     *
     * @return Response
     */
    public function store(CreateeventsRequest $request)
    {
        $input = $request->all();

        $events = $this->eventsRepository->create($input);

        Flash::success('Events saved successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Display the specified events.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            Flash::error('Events not found');

            return redirect(route('events.index'));
        }

        return view('events.show')->with('events', $events);
    }

    /**
     * Show the form for editing the specified events.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            Flash::error('Events not found');

            return redirect(route('events.index'));
        }

        return view('events.edit')->with('events', $events);
    }

    /**
     * Update the specified events in storage.
     *
     * @param  int              $id
     * @param UpdateeventsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeventsRequest $request)
    {
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            Flash::error('Events not found');

            return redirect(route('events.index'));
        }

        $events = $this->eventsRepository->update($request->all(), $id);

        Flash::success('Events updated successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified events from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $events = $this->eventsRepository->findWithoutFail($id);

        if (empty($events)) {
            Flash::error('Events not found');

            return redirect(route('events.index'));
        }

        $this->eventsRepository->delete($id);

        Flash::success('Events deleted successfully.');

        return redirect(route('events.index'));
    }
}
