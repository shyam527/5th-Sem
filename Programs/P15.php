<html>
    <head>
        <title> Read and write file</title>
    </head>
    <body>
        <h2> Write to file</h2>
        <form action=" " method="post">
            <textarea name="content" cols="40" rows="5" placeholder="Enter text to write"></textarea><br/><br/>
            <input type="submit" name="write" value="Write to File">
        </form>
        <hr>
        <h2>Read from File</h2>
        <?php
            $file="data1.txt";
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["write"])){
                $content=$_POST["content"];
                file_put_contents($file,$content,FILE_APPEND |LOCK_EX);
                echo"Content written to file successfully";
            }
            if(file_exists($file)){
                $content=file_get_contents($file);
                echo"<pre> $content</pre>";
            }
            else{
                echo"File not found";
            }
        ?>
    </body>
</html>