<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    //

    public function sendNotification(Request $request) {

        $title = $request->input('title');
        $message = $request->input('message');
        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
                'to' => '/topics/offers',
                'notification' => array (
                        "title" => $title,
                        "body" => $message,
                )
        );
        $fields = json_encode ( $fields );

        $headers = array (
                'Authorization: key=' . "AAAANO67b58:APA91bHprWIp8Q4Bp-riu0bfH7mBCv-ja1YTEtRlmPWcOf5iWTUwwuX-U328kp2w-_lRC3z31GSZXuumV-4oTEsOX6WgQ_imrxLYh4g82vcInLRS7sxtmQSlLRfHGg6N8ZojjTQMvW-x",
                'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        Notification::insert([
                'user_id' => 0,
                "title" => $title,
                'message' => $message,
                'status' => 'unread'
              ]);
        echo $result;
        curl_close ( $ch );
    }
}
