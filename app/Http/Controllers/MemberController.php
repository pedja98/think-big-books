<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $books = Book::orderBy('book_name')->get();
        return view('users.members.index', ['books' => $books]);
    }
}
