<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('admin.notifications', [
            'notifications' => $notifications,
        ]);
    }

    public function notification(Request $request)
    {
        $notification = new Notification();
        $notification->content = $request->input('content');
        Http::post(env('DISCORD_WEBHOOK_URL'), [
            'content' => $notification->content,
        ]);
        $notification->save();
        return redirect()->route('admin.notifications');
    }
}
