<html>
    <head>
        <title>Input Validation</title>
    </head>
    <body>
        <?php
            $username=$usernameErr=" ";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(Empty($_POST ["username"] )){
                    $usernameErr="Username is required";
                }
                else{
                    $username=test_input($_POST["username"]);
                    if(!preg_match("/^[a-zA-Z\s]*$/",$username)){
                        $username="only letters and white space allowed!";
                    }
                }
            }
            function test_input($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
        ?>
        <h2>Validate Input</h2>
        <form action="" method="post">
            Username: <input type="text" name="username">
            <span class="error">
                <?php
                    echo $usernameErr;
                ?>
            </span><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
            if(!Empty($username)){
                echo"<h3>Entered Username:$username</h3>";
            }
        ?>
    </body>
</html>