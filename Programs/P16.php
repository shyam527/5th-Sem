<html>
    <head>
        <title>Student Database operations</title>
    </head>
    <body>
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
            die("Error Creating database:" . $conn->error);
        }

        $sql="use Student";
        $conn->query($sql);
        $sql="Create Table if not exists Students(id int primary key, 
        name varchar(30) not null,
        age INT NOT NULL,
        grade varchar(50))";
        if($conn->query($sql)==true){
            echo"<br>Table Students created successfully<br><br>";
        }
        else{
            die("Error creating table" . $conn->error);
        }

        $add_sql="insert into Students(id,name,age,grade)
        values(1,'abc',20,'A')";

        if($conn->query($add_sql)===true){
            echo"New Record Added Successfully<br><br>";
        }
        else{
            echo"Error adding record:" . $conn->error;
        }
        
        $update_sql="Update Students set age='21'where id='1'";
        
        if($conn->query($update_sql)===true){
            echo"Record Updated Succesfully<br><br>";
        }
        else{
            echo"Error updating record:" . $conn->error;
        }

        $delete_sql="delete from students where id='1'";
        
        if($conn->query($delete_sql)===true){
            echo"Record deleted Succesfully<br><br>";
        }
        else{
            echo"Error deleting record:" . $conn->error;
        }
    ?>
    </body>
</html>