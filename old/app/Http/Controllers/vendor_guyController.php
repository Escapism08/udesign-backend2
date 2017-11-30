<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvendor_guyRequest;
use App\Http\Requests\Updatevendor_guyRequest;
use App\Repositories\vendor_guyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vendor_guyController extends AppBaseController
{
    /** @var  vendor_guyRepository */
    private $vendorGuyRepository;

    public function __construct(vendor_guyRepository $vendorGuyRepo)
    {
        $this->vendorGuyRepository = $vendorGuyRepo;
    }

    /**
     * Display a listing of the vendor_guy.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendorGuyRepository->pushCriteria(new RequestCriteria($request));
        $vendorGuys = $this->vendorGuyRepository->all();

        return view('vendor_guys.index')
            ->with('vendorGuys', $vendorGuys);
    }

    /**
     * Show the form for creating a new vendor_guy.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendor_guys.create');
    }

    /**
     * Store a newly created vendor_guy in storage.
     *
     * @param Createvendor_guyRequest $request
     *
     * @return Response
     */
    public function store(Createvendor_guyRequest $request)
    {
        $input = $request->all();

        $vendorGuy = $this->vendorGuyRepository->create($input);

        Flash::success('Vendor Guy saved successfully.');

        return redirect(route('vendorGuys.index'));
    }

    /**
     * Display the specified vendor_guy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            Flash::error('Vendor Guy not found');

            return redirect(route('vendorGuys.index'));
        }

        return view('vendor_guys.show')->with('vendorGuy', $vendorGuy);
    }

    /**
     * Show the form for editing the specified vendor_guy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            Flash::error('Vendor Guy not found');

            return redirect(route('vendorGuys.index'));
        }

        return view('vendor_guys.edit')->with('vendorGuy', $vendorGuy);
    }

    /**
     * Update the specified vendor_guy in storage.
     *
     * @param  int              $id
     * @param Updatevendor_guyRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevendor_guyRequest $request)
    {
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            Flash::error('Vendor Guy not found');

            return redirect(route('vendorGuys.index'));
        }

        $vendorGuy = $this->vendorGuyRepository->update($request->all(), $id);

        Flash::success('Vendor Guy updated successfully.');

        return redirect(route('vendorGuys.index'));
    }

    /**
     * Remove the specified vendor_guy from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendorGuy = $this->vendorGuyRepository->findWithoutFail($id);

        if (empty($vendorGuy)) {
            Flash::error('Vendor Guy not found');

            return redirect(route('vendorGuys.index'));
        }

        $this->vendorGuyRepository->delete($id);

        Flash::success('Vendor Guy deleted successfully.');

        return redirect(route('vendorGuys.index'));
    }
}
