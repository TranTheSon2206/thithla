<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::simplePaginate(5);
        return view('librarys.index')->with('libraries', $libraries);
    }

    public function create()
    {
        return view('librarys.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Library::create($input);
        return redirect('library')->with('flash_message', 'Library Added!');
    }

    public function show($bookid)
    {
        $library = Library::find($bookid);
        return view('librarys.show')->with('library', $library);
    }

    public function edit($bookid)
    {
        $library = Library::find($bookid);
        return view('librarys.edit')->with('library', $library);
    }

    public function update(Request $request, $bookid)
    {
        $library = Library::find($bookid);
        $input = $request->all();
        $library->update($input);
        return redirect('library')->with('flash_message', 'Library Updated!');
    }

    public function destroy($bookid)
    {
        Library::destroy($bookid);
        return redirect('library')->with('flash_message', 'Library deleted!');
    }

    
    public function search(Request $request) {
            $key = $request->input('keyword');
            $books = Library::where('title', 'like', '%'.$key.'%')->get();
            return view('index', ['libraries'=>$books]);

    }

    

}

