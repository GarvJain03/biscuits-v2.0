<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use Illuminate\Support\Facades\Redirect;
use App\Models\AdminResponse;
use App\Models\User;

class ResponseController extends Controller
{
    public function record_response(Request $request)
    {
        $response = new Response();
        $response->user_id = auth()->user()->id;
        $response->question_id = auth()->user()->question_on;
        $response->answer = $request->answer;
        $response->save();
        return Redirect::to('/dashboard');
    }

    public function record_admin_response(Request $request)
    {
        $response_text = $request->input('responseText');
        $response_id = $request->input('responseId');
        $adminResponse = new AdminResponse();
        $res = Response::all()->find($response_id);

        $adminResponse->user_id = $res->user_id;
        $adminResponse->response_text = $response_text;
        $adminResponse->response_id = $response_id;
        $res->reviewed = true;
        $res->is_correct = false;
        $adminResponse->save();
        $res->save();

        return redirect('/admin');
    }
}
