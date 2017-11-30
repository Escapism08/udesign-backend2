<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createnew_productRequest;
use App\Http\Requests\Updatenew_productRequest;
use App\Repositories\new_productRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class new_productController extends AppBaseController
{
    /** @var  new_productRepository */
    private $newProductRepository;

    public function __construct(new_productRepository $newProductRepo)
    {
        $this->newProductRepository = $newProductRepo;
    }

    /**
     * Display a listing of the new_product.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->newProductRepository->pushCriteria(new RequestCriteria($request));
        $newProducts = $this->newProductRepository->all();

        return view('new_products.index')
            ->with('newProducts', $newProducts);
    }

    /**
     * Show the form for creating a new new_product.
     *
     * @return Response
     */
    public function create()
    {
        return view('new_products.create');
    }

    /**
     * Store a newly created new_product in storage.
     *
     * @param Createnew_productRequest $request
     *
     * @return Response
     */
    public function store(Createnew_productRequest $request)
    {
        $input = $request->all();

        $newProduct = $this->newProductRepository->create($input);

        Flash::success('New Product saved successfully.');

        return redirect(route('newProducts.index'));
    }

    /**
     * Display the specified new_product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            Flash::error('New Product not found');

            return redirect(route('newProducts.index'));
        }

        return view('new_products.show')->with('newProduct', $newProduct);
    }

    /**
     * Show the form for editing the specified new_product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            Flash::error('New Product not found');

            return redirect(route('newProducts.index'));
        }

        return view('new_products.edit')->with('newProduct', $newProduct);
    }

    /**
     * Update the specified new_product in storage.
     *
     * @param  int              $id
     * @param Updatenew_productRequest $request
     *
     * @return Response
     */
    public function update($id, Updatenew_productRequest $request)
    {
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            Flash::error('New Product not found');

            return redirect(route('newProducts.index'));
        }

        $newProduct = $this->newProductRepository->update($request->all(), $id);

        Flash::success('New Product updated successfully.');

        return redirect(route('newProducts.index'));
    }

    /**
     * Remove the specified new_product from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $newProduct = $this->newProductRepository->findWithoutFail($id);

        if (empty($newProduct)) {
            Flash::error('New Product not found');

            return redirect(route('newProducts.index'));
        }

        $this->newProductRepository->delete($id);

        Flash::success('New Product deleted successfully.');

        return redirect(route('newProducts.index'));
    }
}
