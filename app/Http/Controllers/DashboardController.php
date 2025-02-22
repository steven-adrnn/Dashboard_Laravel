<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(Request $request)
    {
        // Check if the user has the required role
        if (!$request->user()->hasRole('admin') && !$request->user()->hasRole('editor')) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
        }
        return view('dashboard.create'); // Show the form for adding a new book
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        Book::create($request->only(['judul', 'penulis', 'tahun_terbit', 'deskripsi']));

        return redirect()->route('dashboard')->with('status', 'Book added successfully!');
    }

    public function edit(Request $request, $id)
    {
        // Check if the user has the required role
        if (!$request->user()->hasRole('admin') && !$request->user()->hasRole('editor')) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
        }

        $book = Book::findOrFail($id); // Find the book by ID
        return view('dashboard.edit', compact('book')); // Show the edit form
    }

    public function update(Request $request, $id)
    {
        // Check if the user has the required role
        if (!$request->user()->hasRole('admin') && !$request->user()->hasRole('editor')) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        $book = Book::findOrFail($id); // Find the book by ID
        $book->update($request->only(['judul', 'penulis', 'tahun_terbit', 'deskripsi'])); // Update the book

        return redirect()->route('dashboard')->with('status', 'Book updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        // Check if the user has the required role
        if (!$request->user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to delete this book.');
        }

        $book = Book::findOrFail($id); // Find the book by ID
        $book->delete(); // Delete the book

        return redirect()->route('dashboard')->with('status', 'Book deleted successfully!');
    }

    public function index()
    {
        $books = Book::all(); // Ambil semua data buku
        return view('dashboard', compact('books')); // Kirim data buku ke tampilan
    }
}
