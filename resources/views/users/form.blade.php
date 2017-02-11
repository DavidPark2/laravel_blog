@extends('master')

@section('content')
    <div class="col-sm-8">
        <h1>Registration</h1>
        <form method="POST" action="/posts">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <textarea class="form-control" id="email" name="email"></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <textarea class="form-control" id="password" name="password"></textarea>
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