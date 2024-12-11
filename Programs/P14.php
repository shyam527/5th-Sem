<?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("connection Failed:".$conn->connect_error);
    }
    $sql="Create Database If not Exists Student";
    if($conn->query($sql)==true){
        echo"Database Created Successfully<br>";
    }
    else{
        die("Error Creating database:".$conn->error);
    }
    $sql="use Student";
    $conn->query($sql);
    $sql="Create Table if not exists images(
    id int auto_increment primary key,
    name varchar(100),
    type varchar(100),
    image_data longblob)";
    if($conn->query($sql)===true){
        echo"Table Images created successfully";
    }
    else{
        die("Error creating table:".$conn->error);
    }
    $sql="delete from images";
    $conn->query($sql);
    if($_SERVER["REQUEST_METHOD"]=="POST"&&isset($_FILES["image"])){
        $imageData=file_get_contents($_FILES["image"]["tmp_name"]);
        $imageName=$_FILES["image"]["name"];
        $imageType=$_FILES["image"]["type"];
        $stmt=$conn->prepare("insert into images(name,type,image_data)VALUES(?,?,?)");
        $stmt->bind_param("sss",$imageName,$imageType,$imageData);
        $stmt->execute();
    }
    function displayImage($conn){
        $sql="select id,name,image_data from images";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
            echo "<img width='200' src='data:image/png;base64," . base64_encode($row['image_data']) . "'alt='" . $row['name'] . "'><br>";
        }
    }
?>

<html>
    <head></head>
    <body>
        <h1>Upload and Display</h1>
        <form method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="image" id="image">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <h2>Uploaded Image</h2>
        <?php 
            displayImage($conn);
            $conn->close();
        ?>
    </body>
</html>