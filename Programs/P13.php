<?php
    Session_start();
    function generate_captcha($length = 6){
        $characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length=strlen($characters);
        $random_string="";
        for($i=0;$i<$length;$i++){
            $random_string.=$characters[rand(0,$characters_length-1)];
        }
        return $random_string;
    }
    echo "Captcha Code:</br>".generate_captcha();
?>