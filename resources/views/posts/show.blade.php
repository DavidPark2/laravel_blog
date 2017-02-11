@extends('master')

@section('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">
                {{ $post->created_at }} by <a href="#">Mark</a>
            </p>

            <p>{{ $post->body }}</p>
        </div>

        <h1>Comments</h1>
        @foreach($post->comments as $comment)
            <div class="card">
                <div class="card-block">
                    <p>{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach
        <hr>

        <h1>Post comments</h1>
        <form method="POST" action="/posts/{{ $post->id }}/comment">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection