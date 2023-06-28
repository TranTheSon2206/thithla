@extends('librarys.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Books List</span>
                    <a href="{{ url('/library/create') }}" class="btn btn-success btn-sm">Create New</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <form action="{{route('library.search')}}" method="GET" class="d-flex">
                            <input type="text" name="keyword" placeholder="Search by title" class="form-control mr-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>ISBN</th>
                                    <th>Publication Year</th>
                                    <th>Available Year</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($libraries as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->ISBN }}</td>
                                    <td>{{ $item->pub_year }}</td>
                                    <td>{{ $item->available }}</td>

                                    <td>
                                        <a href="{{ url('/library/' . $item->bookid) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                        <a href="{{ url('/library/' . $item->bookid . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/library' . '/' . $item->bookid) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete this book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @if ($libraries->isEmpty())
                                <tr>
                                    <td colspan="5">No results found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $libraries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection