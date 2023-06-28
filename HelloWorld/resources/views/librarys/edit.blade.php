@extends('librarys.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="font-weight-600">Edit Page</span>
                        <a href="{{ url('/library') }}" class="btn btn-success btn-sm ml-auto">List Books</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('librarys/' .$library->bookid) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <label>Book ID</label>
                        <p class="card form-control" readonly>{{ $library->bookid }}</p>


                        <input type="hidden" name="id" id="id" value="{{$library->bookid}}" id="bookid" />
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{$library->title}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="authorid">Author ID</label>
                            <input type="text" name="authorid" id="authorid" value="{{$library->authorid}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input type="text" name="isbn" id="isbn" value="{{$library->ISBN}}" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="pub_year">Publication Year</label>
                                <input type="text" name="pub_year" id="pub_year" value="{{$library->pub_year}}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="available">Available</label>
                                <input type="text" name="available" id="available" value="{{$library->available}}" class="form-control">
                            </div>
                        </div>


                        <input type="submit" value="Update" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
