<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class AccountController extends Controller
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
        return view('packs', compact('type'));
    }
}
