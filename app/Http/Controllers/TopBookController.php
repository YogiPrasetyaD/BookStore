<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class TopBookController extends Controller
{
    public function index(Request $request)
    {
        $topAuthors = Book::with(['author', 'category', 'ratings', 'votes'])
            ->select('author_id', DB::raw('SUM(votes.vote) as total_votes'))
            ->join('votes', 'books.id', '=', 'votes.book_id')
            ->groupBy('author_id')
            ->orderByDesc('total_votes')
            ->take(10)
            ->get();

        $title = "Top 10 Authors by Votes";

        
        return view('top10book', compact( 'title'));
    }
}
