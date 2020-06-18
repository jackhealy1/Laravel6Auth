<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $unreadNotifications = request()->user()->unreadNotifications;
        $readNotifications = request()->user()->readNotifications;

        $unreadNotifications->markAsRead();

        return view('notifications.show', [
            'unreadNotifications' => $unreadNotifications,
            'readNotifications' => $readNotifications
        ]);
    }
}
