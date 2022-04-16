<!DOCTYPE html>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $http_client_ip = $_SERVER['HTTP_CLIENT_IP']; }
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; }
if (!empty($_SERVER['REMOTE_ADDR'])) { $remote_addr = $_SERVER['REMOTE_ADDR']; }
$localIP = getHostByName(getHostName());
$localHostName = getHostName();

echo "HTTP_CLIENT_IP: $http_client_ip<br>";
echo "HTTP_X_FORWARDED_FOR: $http_x_forwarded_for<br>";
echo "REMOTE_ADDR: $remote_addr<br>";
echo "getHostByName(): $localIP<br>";
echo "getHostName(): $localHostName<br>";
?> 
 </body>
</html>
