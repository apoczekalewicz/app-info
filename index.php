        <?php
        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
          {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            echo "HTTP_CLIENT_IP: $ip_address<br>";
          }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
          {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            echo "HTTP_X_FORWARDED_FOR: $ip_address<br>";
          }
        //whether ip is from remote address
        else
          {
            $ip_address = $_SERVER['REMOTE_ADDR'];
            echo "REMOTE_ADDR: $ip_address<br>";
          }

$localIP = getHostByName(getHostName());
echo "getHostByName(): $localIP<br>";
$localHostName = getHostName();
echo "getHostName(): $localHostName<br>";
?>

