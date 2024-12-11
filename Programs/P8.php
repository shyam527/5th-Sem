<html>
    <head>
        <title>Change Background Color Based on Day of the Week</title>
    </head>
    <body>
        <?php
            $colors = array(
            "Sunday" =>"red",
            "Monday" =>"Green",
            "Tuesday" =>"Blue",
            "Wednesday" =>"pink",
            "Thursday" =>"yellow",
            "Friday" =>"cyan",
            "Saturday" =>"Orange"
            );
            $dayOfWeek = date("l");
            if (array_key_exists($dayOfWeek, $colors)) {
                $backgroundColor = $colors[$dayOfWeek];
            } 
            else {
                $backgroundColor = "#FFFFFF";
            }
            echo '<style>body { background-color:'.$colors[$dayOfWeek].';}</style>';
        ?>
    <h1>Background Color Based On Day Of The Week</h1>
    <p>Today is <?php echo $dayOfWeek;?>
    </p>
    </body>
</html>