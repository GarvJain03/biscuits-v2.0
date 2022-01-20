<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Response;

class LeaderboardController extends Controller
{
    public function leaderboard()
    {
        $users = DB::table('users')->orderBy('question_on', 'desc')->where('is_admin', false)->get();
        return view('pages.leaderboard', ['users' => $users]);
    }
}
