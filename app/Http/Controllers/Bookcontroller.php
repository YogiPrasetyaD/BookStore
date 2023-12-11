<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Bookcontroller extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with(['author', 'category', 'ratings', 'votes'])
            ->select('id', 'author_id', 'category_id', 'name');

        // Filter by search input
        $search = $request->input('search');
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('books.name', 'like', "%$search%")
                    ->orWhereHas('author', function ($query) use ($search) {
                        $query->where('name', 'like', "%$search%");
                    });
            });
            $request->session()->put('search', $search);
        }

        // Filter by list show input
        $listShow = $request->input('list_show', 10);
        $books = $query->paginate($listShow)->withQueryString(['list_show' => $listShow]);

        $title = "Book List";

        return view('booklist', compact('books', 'title', 'listShow', 'search'));
    }

    public function getBooks($authorId)
    {
        $books = Book::where('author_id', $authorId)->get();

        return response()->json($books);
    }
}
