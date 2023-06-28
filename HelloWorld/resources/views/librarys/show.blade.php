@extends('librarys.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Show Page</span>
                        <a href="{{ url('/library') }}" class="btn btn-success btn-sm">List Books</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <label>Title</label>
                        <p class="card form-control" readonly>{{ optional($library)->title }}</p>

                        <label>Book ID</label>
                        <p class="card form-control" readonly>{{ optional($library)->bookid }}</p>

                        <label>Author ID</label>
                        <p class="card form-control" readonly>{{ optional($library)->authorid }}</p>

                        <label>ISBN</label>
                        <p class="card form-control" readonly>{{ optional($library)->ISBN }}</p>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Publication Year</label>
                                <p class="card form-control" readonly>{{ optional($library)->pub_year }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Available</label>
                                <p class="card form-control" readonly>{{ optional($library)->available }}</p>
                            </div>
                        </div>
                    


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
