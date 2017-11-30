<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductzRequest;
use App\Http\Requests\UpdateproductzRequest;
use App\Repositories\productzRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class productzController extends AppBaseController
{
    /** @var  productzRepository */
    private $productzRepository;

    public function __construct(productzRepository $productzRepo)
    {
        $this->productzRepository = $productzRepo;
    }

    /**
     * Display a listing of the productz.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productzRepository->pushCriteria(new RequestCriteria($request));
        $productzs = $this->productzRepository->all();

        return view('productzs.index')
            ->with('productzs', $productzs);
    }

    /**
     * Show the form for creating a new productz.
     *
     * @return Response
     */
    public function create()
    {
        return view('productzs.create');
    }

    /**
     * Store a newly created productz in storage.
     *
     * @param CreateproductzRequest $request
     *
     * @return Response
     */
    public function store(CreateproductzRequest $request)
    {
        $input = $request->all();

        $productz = $this->productzRepository->create($input);

        Flash::success('Productz saved successfully.');

        return redirect(route('productzs.index'));
    }

    /**
     * Display the specified productz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            Flash::error('Productz not found');

            return redirect(route('productzs.index'));
        }

        return view('productzs.show')->with('productz', $productz);
    }

    /**
     * Show the form for editing the specified productz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            Flash::error('Productz not found');

            return redirect(route('productzs.index'));
        }

        return view('productzs.edit')->with('productz', $productz);
    }

    /**
     * Update the specified productz in storage.
     *
     * @param  int              $id
     * @param UpdateproductzRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductzRequest $request)
    {
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            Flash::error('Productz not found');

            return redirect(route('productzs.index'));
        }

        $productz = $this->productzRepository->update($request->all(), $id);

        Flash::success('Productz updated successfully.');

        return redirect(route('productzs.index'));
    }

    /**
     * Remove the specified productz from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productz = $this->productzRepository->findWithoutFail($id);

        if (empty($productz)) {
            Flash::error('Productz not found');

            return redirect(route('productzs.index'));
        }

        $this->productzRepository->delete($id);

        Flash::success('Productz deleted successfully.');

        return redirect(route('productzs.index'));
    }
}
