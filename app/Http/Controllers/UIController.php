<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class UIController extends Controller
{
    public function renderRegister($type)
    {
        return view("register", compact('type'));
    }
    public function renderLogin($type)
    {
        return view("login", compact('type'));
    }
    public function renderSubscriptionPlan($type)
    {
        return view('plans', compact('type'));
    }
    public function renderBookUpload()
    {
        return view('book-upload');
    }

    public function renderAdminStats()
    {
        return view('admin.stats');
    }
    public function renderAdminReaders()
    {
        return view('admin.readers');
    }

    public function renderAdminWriters()
    {
        return view('admin.writers');
    }
    public function renderAdminBooks()
    {
        return view('admin.books');
    }
}
