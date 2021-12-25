<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;
    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index() {
        $posts = $this->postRepository->getAll();
        return view("post.list",compact("posts"));
    }
    public function delete($id) {
        $this->postRepository->delete($id);
        return redirect()->route('posts.list');
    }
    public function show($id) {
        $post = $this->postRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view("post.detail",compact("post","categories"));
    }
    public function create() {
        $users = User::all();
        $categories = $this->categoryRepository->getAll();
        return view("post.create",compact("users","categories"));
    }

    public function store(Request $request) {
        $this->postRepository->create($request);
        return redirect()->route("posts.list");
    }

    public function edit($id) {
        $users = User::all();
        $post = $this->postRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view("post.update",compact("post","users","categories"));
    }

    public function update(Request $request) {
        $this->postRepository->update($request);
        return redirect()->route("posts.list");
    }


}
