<?php

use Illuminate\Support\Facades\Request;
use Carbon\Carbon;
use App\Notifications\DeviceIdsFCM;
use Illuminate\Support\Str;
use App\User;

/**
 * get initials of a string
 */
if (!function_exists('initials')) {
    /**
     * Get initials of a string
     * @param $string
     * @param string $glue
     * @return string
     */
    function initials($string, $glue = ' ')
    {
        $ret = [];
        $exploded = explode(' ', $string);

        if (is_array($exploded)) {
            foreach ($exploded as $word) {
                $ret[] = strtoupper($word[0]);
            }
            return implode($glue, $ret);
        }

        return $string;

    }
}

function isActiveRoute($route, $output = "active")
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }

}

function printToTwoDecimalPlaces($number)
{
    return number_format((float)$number, 2, '.', '');

}

function meterToKm($meter)
{
    return number_format((float)($meter/1000), 2, '.', '');

}

function getCurrentTimezoneTime($date)
{
    if(!\Session::has('riders_admin_timezone')){
        \Session::put('riders_admin_timezone', 'Asia/Kolkata');
    }
    $timezone = \Session::get('riders_admin_timezone');
    $date = Carbon::createFromFormat('Y-m-d H:i:s', $date, 'UTC')
    ->setTimezone($timezone);
    return date("jS M Y g:i A", strtotime($date));
}

function getUTCTimezoneTime($date)
{
    if(!\Session::has('riders_admin_timezone')){
        \Session::put('riders_admin_timezone', 'Asia/Kolkata');
    }
    $timezone = \Session::get('riders_admin_timezone');
    $date = Carbon::createFromFormat('Y-m-d H:i:s', $date, $timezone)
    ->setTimezone('UTC');
    return date("Y-m-d H:i:s", strtotime($date));
}

function formatMilliseconds($milliseconds) {
    $seconds = floor($milliseconds / 1000);
    $minutes = floor($seconds / 60);
    $hours = floor($minutes / 60);
    $milliseconds = $milliseconds % 1000;
    $seconds = $seconds % 60;
    $minutes = $minutes % 60;

    $format = '%u:%02u:%02u.%03u';
    $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
    return rtrim($time, '0');
}

function normalisedArray($arrays)
{
    $list = [];
    foreach($arrays as $array){
        array_push($list, [
            $array->latitude,
            $array->longitude
        ]);
    }
return $list;
}

function areActiveRoutes(array $routes, $output = "active")
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) {
            return $output;
        }

    }
}

function areActiveDynamicRoutes(array $routes, $output = "active")
{
    foreach ($routes as $route) {
        if (strpos(Request::url(), $route) !== false) {
            return $output;
        }

    }
}

function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function displayName($name)
{
    return ucwords(strtolower($name));
}

function get_date_diff($from_date, $to_date)
{
    $diff = strtotime($to_date) - strtotime($from_date);
    $days = floor($diff / (60 * 60 * 24));
    $hours = floor($diff / (60 * 60));
    $minutes = floor($diff / (60));
    $seconds = $diff;
    if ($seconds == 0) {
        $timediff = "Just Now";
    } else if ($seconds < 60) {
        $timediff = $seconds . " sec ago";
    } else if ($minutes < 60) {
        $timediff = $minutes . " min ago";
    } else if ($hours < 24) {
        $timediff = $hours . " hours ago";
    } else if ($days < 30) {
        $timediff = $days . " days ago";
    } else {
        $timediff = date('jS M g:i A', strtotime($from_date));
    }
    return $timediff;
}

function checkEmail($email) {
    $find1 = strpos($email, '@');
    $find2 = strpos($email, '.');
    return ($find1 !== false && $find2 !== false && $find2 > $find1);
 }

 function getStaticGmapURLForDirection($origin, $destination, $waypoints, $size = "500x500") {
    $markers = array();
    $waypoints_labels = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K");
    $waypoints_label_iter = 0;

    $markers[] = "markers=color:green" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter++] . '|' . $origin);
    foreach ($waypoints as $waypoint) {
        $markers[] = "markers=color:blue" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter++] . '|' . $waypoint);
    }
    $markers[] = "markers=color:red" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter] . '|' . $destination);

    $url = "https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyCTXLKM91SCzkEMt7HGYJY7L50qdsHt_VY&origin=$origin&destination=$destination&waypoints=" . implode($waypoints, '|');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, false);
    $result = curl_exec($ch);
    curl_close($ch);
    $googleDirection = json_decode($result, true);

    if(isset($googleDirection['routes'][0])){
    $polyline = urlencode($googleDirection['routes'][0]['overview_polyline']['points']);
    $markers = implode($markers, '&');
    
    return "https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyCTXLKM91SCzkEMt7HGYJY7L50qdsHt_VY&size=$size&maptype=roadmap&path=color:0xD97412FF|geodesic:true|enc:$polyline&$markers";
    }else{
        return false;
    }
}


    function sendSMS1()
    {
        \Notification::send(User::first(), new DeviceIdsFCM(
            ["33dd49e9297b8cfcf572a5b32990c843b8d3c6adc6e7a7a96f026207fb958c85", "e86TSbTiXkiktCMMial4a7:APA91bE5o6ivYNNNgHM-RlNDCP_p_uLKZURzerWvJseyR8kTbQSPt6vh-mh25hnGqD7KdmQafoGDa9A2FrsGlsU2YAe0rqFz4aJFMa-1N-XtydWPDWSaWBBSPed3T8vsk0bvAEON2tkW"],
            "Test Notification",
            "This is test Notification",
            "task_id",
            "task_type"
        ));
        
        return "Notification Sent";
    }

    function getNewUUID(){
        return Str::uuid();
    }

    function checkDataExists($data, $key, $default_data){
        return isset($data) && $data ? (isset($data[$key]) && $data[$key] ? $data[$key] : $default_data) : $default_data;
    }