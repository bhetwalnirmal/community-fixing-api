<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\CreatePostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    public function __construct(PostService $postService) {
        $this->service = $postService;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePostRequest $request)
    {
        $data = $request->get('post');
        // TODO insert auth user instead of null
        $post = $this->getService()->create($data, [], null);

        return new Response(['post' => $post], 200, ['Content-Type' => 'application/json']);
    }
    
    public function getAll (Request $request) {
        $posts = $this->getService()->getAll();
        
        return new Response(['posts' => $posts], 200, ['Content-Type' => 'application/json']);
    }
}
