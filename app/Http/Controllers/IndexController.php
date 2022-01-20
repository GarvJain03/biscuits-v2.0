<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Response;

class IndexController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $question = Question::all();
            $q = $question->where('id', '=', $user->question_on)->first();
            $response = Response::all();
            $r = $response->where('user_id', '=', $user->id)->where('reviewed', '=', false);
            if ($r->count() > 0) {
                return "Under Review";
            }
            return view('pages.coming_soon', [
                'question' => $q,
            ]);
        } else {
            return view('pages.welcome');
        }
    }
}
