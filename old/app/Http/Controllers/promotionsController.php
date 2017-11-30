<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepromotionsRequest;
use App\Http\Requests\UpdatepromotionsRequest;
use App\Repositories\promotionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class promotionsController extends AppBaseController
{
    /** @var  promotionsRepository */
    private $promotionsRepository;

    public function __construct(promotionsRepository $promotionsRepo)
    {
        $this->promotionsRepository = $promotionsRepo;
    }

    /**
     * Display a listing of the promotions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->promotionsRepository->pushCriteria(new RequestCriteria($request));
        $promotions = $this->promotionsRepository->all();

        return view('promotions.index')
            ->with('promotions', $promotions);
    }

    /**
     * Show the form for creating a new promotions.
     *
     * @return Response
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created promotions in storage.
     *
     * @param CreatepromotionsRequest $request
     *
     * @return Response
     */
    public function store(CreatepromotionsRequest $request)
    {
        $input = $request->all();

        $promotions = $this->promotionsRepository->create($input);

        Flash::success('Promotions saved successfully.');

        return redirect(route('promotions.index'));
    }

    /**
     * Display the specified promotions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            Flash::error('Promotions not found');

            return redirect(route('promotions.index'));
        }

        return view('promotions.show')->with('promotions', $promotions);
    }

    /**
     * Show the form for editing the specified promotions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            Flash::error('Promotions not found');

            return redirect(route('promotions.index'));
        }

        return view('promotions.edit')->with('promotions', $promotions);
    }

    /**
     * Update the specified promotions in storage.
     *
     * @param  int              $id
     * @param UpdatepromotionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepromotionsRequest $request)
    {
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            Flash::error('Promotions not found');

            return redirect(route('promotions.index'));
        }

        $promotions = $this->promotionsRepository->update($request->all(), $id);

        Flash::success('Promotions updated successfully.');

        return redirect(route('promotions.index'));
    }

    /**
     * Remove the specified promotions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $promotions = $this->promotionsRepository->findWithoutFail($id);

        if (empty($promotions)) {
            Flash::error('Promotions not found');

            return redirect(route('promotions.index'));
        }

        $this->promotionsRepository->delete($id);

        Flash::success('Promotions deleted successfully.');

        return redirect(route('promotions.index'));
    }
}
