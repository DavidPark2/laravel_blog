@extends('master')

@section('content')
    <div class="col-sm-8">
        <form method="POST" action="/posts">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body: </label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>
@endsection