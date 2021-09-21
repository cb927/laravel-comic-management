<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\RentedBook;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();
        return view('admin.index', compact('books'));
    }

    public function add_book()
    {
        return view('admin.add_book');
    }

    public function store_book(Request $request)
    {
        $barcode = $request->barcode;
        $title = $request->title;
        $volume = $request->volume;

        Book::create([
            'barcode' => $barcode,
            'title' => $title,
            'volume' => $volume
        ]);

        return redirect(route('admin.index'));
    }

    public function rented_book()
    {
        $rented_books = RentedBook::all();
        return view('admin.rented_book', compact('rented_books'));
    }
}
