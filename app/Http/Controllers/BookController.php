<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class BookController extends Controller
{
    public function index()
    {
        $book_name = request('book_name');
        $publishing_year = request('publishing_year');

        $books = null;
        if ($book_name == null && $publishing_year == null) {
            $books = Book::orderBy('book_name')->get();
        } else {
            if ($publishing_year == "") {
                $books = Book::where("book_name", 'like', '%' . $book_name . '%')
                    ->orderBy('book_name')
                    ->get();
            } else {
                $books = Book::where("book_name", 'like', '%' . $book_name . '%')
                    ->whereRaw("TIMESTAMPDIFF(YEAR, publishing_date, NOW())" . $publishing_year)
                    ->orderBy('book_name')
                    ->get();
            }
        }

        session(['books' => $books]);
        return view('books.index');
    }

    public function show($book) {
        $book = Book::findOrFail($book);
        return view('books.details', ['book' => $book]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv, xml, xlsx'
        ]);
        $file = file($request->file->getRealPath());

        $data = array_map('str_getcsv', $file);

        foreach (array_slice($data, 1) as $item) {
            $date = Carbon::createFromFormat('d/m/Y',  $item[3]);
            Book::create([
                "book_name" => $item[0],
                "author" => $item[1],
                "publisher" => $item[2],
                "publishing_date" => $date
            ]);
        }

        return redirect()->back()->with('success', 'Data imported successfully');
    }
}
