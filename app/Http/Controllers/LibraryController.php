<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bookData = Library::orderBy("book_name")->get();
        return view('library.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //  $bookData = $request->all();
        //  dd($bookData['description'] , $request->description);
        $user = Library::create([
            'book_name' =>  $request->book_name,
            'author' => $request->author_name,
            'email' => $request->email,
            'publisher_name' => $request->publisher_name,
            'issue_date' => $request->issue_date,
            'phone_number' => $request->phone_number,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return redirect()->route('libraries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        // dd($library);
        $library = Library::find($library->id);
        // $library = DB::table('libraries')->
        // where('id' , $library->id)->
        // first();
        // dd($bookData);

        // dd($library);
        return view('library.show' , ['bookData' => $library]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        // dd($library);
        $bookData = $library;
        return  view('library.update' , compact('bookData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        Library::where( 'id' , $library->id)->delete($library->id);
        return redirect()->route('libraries.index');
        // dd($library->id);
    }
    public function allbooks(Library $library)
    {
        $bookData = Library::orderBy("book_name")->get();
        return view('library.allbook' , ['bookDatas' => $bookData]);
    }
    public function authors(Library $library)
    {
        $bookData = Library::orderBy("book_name")->get();
        return view('library.authors' , ['bookDatas' => $bookData]);
    }
}
