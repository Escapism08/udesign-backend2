<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadvertismentRequest;
use App\Http\Requests\UpdateadvertismentRequest;
use App\Repositories\advertismentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class advertismentController extends AppBaseController
{
    /** @var  advertismentRepository */
    private $advertismentRepository;

    public function __construct(advertismentRepository $advertismentRepo)
    {
        $this->advertismentRepository = $advertismentRepo;
    }

    /**
     * Display a listing of the advertisment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advertismentRepository->pushCriteria(new RequestCriteria($request));
        $advertisments = $this->advertismentRepository->all();

        return view('advertisments.index')
            ->with('advertisments', $advertisments);
    }

    /**
     * Show the form for creating a new advertisment.
     *
     * @return Response
     */
    public function create()
    {
        return view('advertisments.create');
    }

    /**
     * Store a newly created advertisment in storage.
     *
     * @param CreateadvertismentRequest $request
     *
     * @return Response
     */
    public function store(CreateadvertismentRequest $request)
    {
        $input = $request->all();

        $advertisment = $this->advertismentRepository->create($input);

        Flash::success('Advertisment saved successfully.');

        return redirect(route('advertisments.index'));
    }

    /**
     * Display the specified advertisment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            Flash::error('Advertisment not found');

            return redirect(route('advertisments.index'));
        }

        return view('advertisments.show')->with('advertisment', $advertisment);
    }

    /**
     * Show the form for editing the specified advertisment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            Flash::error('Advertisment not found');

            return redirect(route('advertisments.index'));
        }

        return view('advertisments.edit')->with('advertisment', $advertisment);
    }

    /**
     * Update the specified advertisment in storage.
     *
     * @param  int              $id
     * @param UpdateadvertismentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadvertismentRequest $request)
    {
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            Flash::error('Advertisment not found');

            return redirect(route('advertisments.index'));
        }

        $advertisment = $this->advertismentRepository->update($request->all(), $id);

        Flash::success('Advertisment updated successfully.');

        return redirect(route('advertisments.index'));
    }

    /**
     * Remove the specified advertisment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advertisment = $this->advertismentRepository->findWithoutFail($id);

        if (empty($advertisment)) {
            Flash::error('Advertisment not found');

            return redirect(route('advertisments.index'));
        }

        $this->advertismentRepository->delete($id);

        Flash::success('Advertisment deleted successfully.');

        return redirect(route('advertisments.index'));
    }
}
