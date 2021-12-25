<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\User;
use App\Repositories\Impl\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function create($request)
    {
        $data = $request->only("title", "content","user_id");
        $post = Post::create($data);
        $post->categories()->attach($request->category);
    }

    public function update($request)
    {
        $data = $request->only("title", "content","user_id");
        $post = Post::findOrFail($request->id);
        $post->update($data);
        $post->categories()->sync($request->category);
    }
}
