<?php

namespace App\Http\Controllers;

//use App\Repositories\PostRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Entities\Post;

class PostController extends Controller
{

//    private $postRepo;
//
//
//    public function __construct(PostRepository $postRepo)
//    {
//        $this->postRepo = $postRepo;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.create', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        return view('posts.create', [
            'posts' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PostRepository $postRepository)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body'  => 'required'
        ]);
       $postRepository->createPost([
           'title'  => $request->get('title'),
           'body'   => $request->get('body')
       ]);
        
        return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, PostRepository $postRepository)
    {
        $posts = Post::all();
        $post = $postRepository->find($id);

        return view('posts.show', [
            'post'  => $post,
            'posts' => $posts
        ]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PostRepository $postRepository)
    {
        $postRepository->delete($id);
        return redirect()->route('posts.create');
 

    }

}
