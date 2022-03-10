    <?php
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
      {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        echo "HTTP_CLIENT_IP $ip_address";
      }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        echo "HTTP_X_FORWARDED_FOR $ip_address";
      }
      else
      {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        echo "REMOTE_ADDR $ip_address";
      }
    ?> 
