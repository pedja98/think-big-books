<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
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
