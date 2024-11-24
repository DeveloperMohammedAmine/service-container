<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\DBService;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function __construct(protected DBService $DBService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        return $posts = $this->DBService->getAllPostsWithPagination(new Post, [], 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('posts.create');

        $data = [
            'title' => 'just for testing 22',
            'body' => 'just for testing 22',
            'user_id' => 3, 
            'image' => 'just for testing 22'
        ];

        return $this->DBService->update(new Post, $data, 1);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'title' => 'just for testing 22',
            'body' => 'just for testing 22',
            'user_id' => 3, 
            'image' => 'just for testing 22'
        ];

        return $this->DBService->store(new Post, $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
