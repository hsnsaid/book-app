<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function storeBook(BookRequest $request)
    {
        $file = $request->file('file');
        $picture = $request->file('picture');

        $fileName = trim(str_replace(' ', '_', $request->input('title'))) . '.' . $file->getClientOriginalExtension();
        $pictureName = trim(str_replace(' ', '_', $request->input('title'))) . '.' . $picture->getClientOriginalExtension();


        $file->storeAs('books', $fileName, 'public');
        $picture->storeAs('covers', $pictureName, 'public');


        $book = Book::create([
            'title' => $request->input('title'),
            'genre' => $request->input('genre'),
            'language' => $request->input('language'),
            'description' => $request->input('description'),
            'file' => "books/$fileName",
            'picture' => "covers/$pictureName",
            'writer_id' => 1,
        ]);

        return redirect()->route('book.upload')->with('success', "$book->title a été bien téléverser");
    }
}
