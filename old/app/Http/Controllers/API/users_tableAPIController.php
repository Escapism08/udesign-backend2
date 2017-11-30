<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createusers_tableAPIRequest;
use App\Http\Requests\API\Updateusers_tableAPIRequest;
use App\Models\users_table;
use App\Repositories\users_tableRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class users_tableController
 * @package App\Http\Controllers\API
 */

class users_tableAPIController extends AppBaseController
{
    /** @var  users_tableRepository */
    private $usersTableRepository;

    public function __construct(users_tableRepository $usersTableRepo)
    {
        $this->usersTableRepository = $usersTableRepo;
    }

    /**
     * Display a listing of the users_table.
     * GET|HEAD /usersTables
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usersTableRepository->pushCriteria(new RequestCriteria($request));
        $this->usersTableRepository->pushCriteria(new LimitOffsetCriteria($request));
        $usersTables = $this->usersTableRepository->all();

        return $this->sendResponse($usersTables->toArray(), 'Users Tables retrieved successfully');
    }

    /**
     * Store a newly created users_table in storage.
     * POST /usersTables
     *
     * @param Createusers_tableAPIRequest $request
     *
     * @return Response
     */
    public function store(Createusers_tableAPIRequest $request)
    {
        $input = $request->all();

        $usersTables = $this->usersTableRepository->create($input);

        return $this->sendResponse($usersTables->toArray(), 'Users Table saved successfully');
    }

    /**
     * Display the specified users_table.
     * GET|HEAD /usersTables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var users_table $usersTable */
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            return $this->sendError('Users Table not found');
        }

        return $this->sendResponse($usersTable->toArray(), 'Users Table retrieved successfully');
    }

    /**
     * Update the specified users_table in storage.
     * PUT/PATCH /usersTables/{id}
     *
     * @param  int $id
     * @param Updateusers_tableAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updateusers_tableAPIRequest $request)
    {
        $input = $request->all();

        /** @var users_table $usersTable */
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            return $this->sendError('Users Table not found');
        }

        $usersTable = $this->usersTableRepository->update($input, $id);

        return $this->sendResponse($usersTable->toArray(), 'users_table updated successfully');
    }

    /**
     * Remove the specified users_table from storage.
     * DELETE /usersTables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var users_table $usersTable */
        $usersTable = $this->usersTableRepository->findWithoutFail($id);

        if (empty($usersTable)) {
            return $this->sendError('Users Table not found');
        }

        $usersTable->delete();

        return $this->sendResponse($id, 'Users Table deleted successfully');
    }
}
