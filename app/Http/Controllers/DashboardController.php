<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $admin_response = DB::table('admin_responses')->where('user_id', '=', $user->id)->latest()->first();
        return view('pages.dashboard', ['user' => $user, 'admin_response' => $admin_response]);
    }
}
