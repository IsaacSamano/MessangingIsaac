<?php

function notify($to,$data){

    $api_key="AAAAl5-Adt4:APA91bEO_M2LAwHpyYe88B1qAbxlYaKfPsOx1Yb8zCm0zsXtP6sxYy-HiTzaOv6Y_TyQsE3ZTX94f1B-iUdVK51lCMmqcpJnDwn7EE5OjXkpf5euBCq4-GNIZzmKw8vcMOyrseC-3USV";
    $url="https://fcm.googleapis.com/fcm/send";
    $fields=json_encode(array('to'=>$to,'notification'=>$data));

    // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($fields));

    $headers = array();
    $headers[] = 'Authorization: key ='.$api_key;
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}

$to="f3XEupfPTluBjQ-EDFf7Wb:APA91bF-g4SZ4bZG3Ke-N6zzCtXNcHRKKpOjIRZLee2fSOLTzd64qLtDUSo235WSeSnn4ui3zRdHiyMRgYsEHsKFu_bWxEKviRmbT25o3r-tefGmpP3ABlRhA6X1WDj4633TNz3je9A7";
$data=array(
    'title'=>'Isaac Samano Lopez',
    'body'=>'Ya aparecio la notificacion'
);

notify($to,$data);
echo "Notification Sent";

?>