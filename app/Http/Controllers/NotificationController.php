<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function sendNotification(Request $request) {

        $title = $request->input('title');
        $message = $request->input('message');
        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
                'topic' => 'offers',
                'notification' => array (
                        "title" => $title,
                        "body" => $message,
                )
        );
        $fields = json_encode ( $fields );

        $headers = array (
                'Authorization: key=' . "AIzaSyAdsimUhBeg3mH1H9OL9JZP6ujFimIlVc0",
                'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        echo $result;
        curl_close ( $ch );
    }
}
