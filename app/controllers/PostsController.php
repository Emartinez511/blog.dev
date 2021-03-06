<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function __construct()
	    {
	        $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}


	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('/posts/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		    // attempt validation
		    if ($validator->fails()) {
		        // validation failed, redirect to the post create page with validation errors and old inputs
				return Redirect::back()->withInput()->withErrors($validator);
			} else {
				$post = new Post();
				$post->title = Input::get('title');
				$post->description = Input::get('description');
				$post->user_id = User::first()->id;

				if($post->save()) {
					Log::info("$post");
					Session::flash('successMessage', 'Post has been saved');
					return Redirect::action('PostsController@show', $post->id);
				}
			}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
            $post = Post::findOrFail($id);
            return View::make('posts.show')->with(['post' => $post]);
        } catch(Exception $e) {
            App::abort(404);
        }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		    // attempt validation
		    if ($validator->fails()) {
		        // validation failed, redirect to the post create page with validation errors and old inputs
				return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->description = Input::get('description');
			$post->user_id = User::first()->id;

			if($post->save()) {
				Session::flash('successMessage', 'Edit saved');
				return Redirect::action('PostsController@show', $post->id);
			}
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
