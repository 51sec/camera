<?php
//allow cross domain
header("Access-Control-Allow-Origin:*");
echo base64();
function base64()
{
    //receive base64 data
    $image = $_POST['imegse'];
    if (empty($image)) {
        return null;
    }
    //set up photo file name
    $imageName = date("His", time()) . "_" . rand(1111, 9999) . '.png';
    //check if there is a comma, if found comma, get the back part after comma
    if (strstr($image, ",")) {
        $image = explode(',', $image);
        $image = $image[1];
    }
    //set up photo's name
    $tz = 'America/Toronto';
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
    $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
    
    $path = "./" . getIp() . '/' . $dt->format('Ymd');
    //$path = "./" . getIp() . '/' . date("Ymd", time());
    //check if folder exists. If not, create it
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
    //set up photo's folder name
    $imageSrc = $path . "/" . $imageName;
    //create folder and photos
    $r = file_put_contents($imageSrc, base64_decode($image));
    if (!$r) {
        return 0;
    } else {
        return 1;
    }
}
function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
