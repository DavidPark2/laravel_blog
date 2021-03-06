<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        Comment::create([
            'comment' => request('comment'),
            'post_id' => $post->id
        ]);

        return back();
    }
}
