<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Response;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        $users = User::where('is_admin', '=', false)->get();
        $questions = Question::all();
        $response = Response::all();
        $responses = Response::where('reviewed', '=', false)->get();
        return view('admin.index', [
            'stats' => [
                'users' => $users->count(),
                'questions' => $questions->count(),
                'responses' => $responses->count(),
            ],
        ]);
    }

    public function responses()
    {
        $responses = Response::where('reviewed', '=', false)->get();
        return view('admin.responses', [
            'responses' => $responses,
        ]);
    }

    public function show_response($id)
    {
        $response = Response::find($id);
        $user = User::find($response->user_id);
        $response->user = $user;
        return view('admin.show.response', [
            'response' => $response,
        ]);
    }

    public function mark_correct(Request $request)
    {
        $response = Response::all()->find($request->input('response_id'));
        $user = User::all()->find($response->user_id);
        $response->reviewed = true;
        $response->is_correct = true;
        $user->question_on = $user->question_on + 1;
        $response->save();
        $user->save();
        return redirect()->route('admin.responses');
    }
}
