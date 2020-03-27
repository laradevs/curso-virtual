<?php

return [

    /**
     * Set your FCM Server Key
     * Change to yours
     */

    'server_key' => env('FCM_SERVER_KEY', 'YOUR_SERVER_KEY'),
    'server_endpoint' => env('FCM_SERVER_ENDPOINT', 'https://fcm.googleapis.com/fcm/send'),
    'server_icon_app'=> env('FCM_ICON_APP')

];
