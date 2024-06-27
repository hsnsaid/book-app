<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function accessAccount(Request $request)
    {
        $admin = Admin::all()
            ->where('name', $request->input('name'))
            ->where('password', $request->input("password"))
            ->first();

        if ($admin == null)
            return redirect()->route('login.form', ['type' => 'admin'])->with('message', 'invalide pseudo ou/et mot de passe');
        else
            session([
                'auth' => true,
                'userType' => 'reader',
                'name' => $admin->name,
            ]);

        session()->put('id', $admin->id);
        return redirect()->route('admin.stats');
    }
}
