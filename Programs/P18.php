<?php
    $cookie_name="book";
    $cookie_value="WP Textbook";
    $expiration_time=time()+(24*3600);
    setcookie($cookie_name,$cookie_value,$expiration_time,"/");
    echo "Cookie ".$cookie_name." is set <br>";
    if(isset($_COOKIE[$cookie_name])){
        echo "Value of the cookie ".$cookie_name." is ".$_COOKIE[$cookie_name];
    }
    else{
        echo "Cookie Named " . $cookie_name . " is not set";
    }
?>