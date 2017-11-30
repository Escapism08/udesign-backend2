<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\PostsRepository;
use App\Models\Posts;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class PostsAPIController extends AppBaseController
{
	/** @var  PostsRepository */
	private $postsRepository;

	function __construct(PostsRepository $postsRepo)
	{
		$this->postsRepository = $postsRepo;
	}

	/**
	 * Display a listing of the Posts.
	 * GET|HEAD /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->postsRepository->all();

		return $this->sendResponse($posts->toArray(), "Posts retrieved successfully");
	}

	/**
	 * Show the form for creating a new Posts.
	 * GET|HEAD /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Posts in storage.
	 * POST /posts
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Posts::$rules) > 0)
			$this->validateRequestOrFail($request, Posts::$rules);

		$input = $request->all();

		$posts = $this->postsRepository->create($input);

		return $this->sendResponse($posts->toArray(), "Posts saved successfully");
	}

	/**
	 * Display the specified Posts.
	 * GET|HEAD /posts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$posts = $this->postsRepository->apiFindOrFail($id);

		return $this->sendResponse($posts->toArray(), "Posts retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Posts.
	 * GET|HEAD /posts/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Posts in storage.
	 * PUT/PATCH /posts/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Posts $posts */
		$posts = $this->postsRepository->apiFindOrFail($id);

		$result = $this->postsRepository->updateRich($input, $id);

		$posts = $posts->fresh();

		return $this->sendResponse($posts->toArray(), "Posts updated successfully");
	}

	/**
	 * Remove the specified Posts from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->postsRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Posts deleted successfully");
	}
}
