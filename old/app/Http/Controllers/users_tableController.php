<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createusers_tableRequest;
use App\Http\Requests\Updateusers_tableRequest;
use App\Repositories\users_tableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class users_tableController extends AppBaseController
{
    /** @var  users_tableRepository */
    private $usersTableRepository;

    public function __construct(users_tableRepository $usersTableRepo)
    {
        $this->usersTableRepository = $usersTableRepo;
    }

    /**
     * Display a listing of the users_table.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usersTableRepository->pushCriteria(new RequestCriteria($request));
        $usersTables = $this->usersTableRepository->all();

        return view('users_tables.index')
            ->with('usersTables', $usersTables);
    }

    /**
     * Show the form for creating a new users_table.
     *
     * @return Response
     */
    public function create()
    {
        return view('users_tables.create');
    }

    /**
     * Store a newly created users_table in storage.
     *
     * @param Createusers_tableRequest $request
     *
     * @return Response
     */
    public function store(Createusers_tableRequest $request)
    {
        $input = $request->all();

        $usersTable = $this->usersTableRepository->create($input);

        Flash::success('Users Table saved successfully.');

        return redirect(route('usersTables.index'));
    }

    /**
     * Display the specified users_table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            Flash::error('Users Table not found');

            return redirect(route('usersTables.index'));
        }

        return view('users_tables.show')->with('usersTable', $usersTable);
    }

    /**
     * Show the form for editing the specified users_table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            Flash::error('Users Table not found');

            return redirect(route('usersTables.index'));
        }

        return view('users_tables.edit')->with('usersTable', $usersTable);
    }

    /**
     * Update the specified users_table in storage.
     *
     * @param  int              $id
     * @param Updateusers_tableRequest $request
     *
     * @return Response
     */
    public function update($id, Updateusers_tableRequest $request)
    {
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            Flash::error('Users Table not found');

            return redirect(route('usersTables.index'));
        }

        $usersTable = $this->usersTableRepository->update($request->all(), $id);

        Flash::success('Users Table updated successfully.');

        return redirect(route('usersTables.index'));
    }

    /**
     * Remove the specified users_table from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            Flash::error('Users Table not found');

            return redirect(route('usersTables.index'));
        }

        $this->usersTableRepository->delete($id);

        Flash::success('Users Table deleted successfully.');

        return redirect(route('usersTables.index'));
    }
}
