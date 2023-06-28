@extends('librarys.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Create Page</span>
                        <a href="{{ url('/library') }}" class="btn btn-success btn-sm ml-auto">List Books</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('library') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="authorid">AuthorID</label>
                            <input type="text" name="authorid" id="authorid" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ISBN">ISBN</label>
                            <input type="text" name="ISBN" id="ISBN" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="weight">Publication Year</label>
                                <input type="text" name="pub_year" id="pub_year" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="price">Available</label>
                                <input type="text" name="available" id="available" class="form-control">
                            </div>
                        </div>

                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
