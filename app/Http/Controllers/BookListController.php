<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Vote;
use App\Models\BookList;
use App\Http\Requests\StoreBookListRequest;
use App\Http\Requests\UpdateBookListRequest;

class BookListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::with(['author', 'category', 'ratings', 'votes'])
            ->withCount('votes')
            ->select('id', 'author_id', 'category_id', 'title', 'value')
            ->paginate(10); 

        return view('booklist', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookList $bookList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookList $bookList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookListRequest $request, BookList $bookList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookList $bookList)
    {
        //
    }
}
