<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mylist;

class MylistController extends Controller
{
    /**
     * Display a listing of the books in the user's list.
     *
     */
    public function showBooks(int $userId, string $userType)
    {
        $mylists = Mylist::where('user_id', $userId)
                        ->where('user_type', $userType)
                        ->with('book') 
                        ->get();
        $books = $mylists->map(function ($mylist) {
            return $mylist->book;
        });
        return view('mes-livres', ['books' => $books]);
    }
}
