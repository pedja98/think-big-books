<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $books = Book::orderBy('book_name')->get();
        session(['books' => $books]);
        return view('users.members.index');
    }
}
