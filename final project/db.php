<html>
    <head>
        <title>19 program</title>
    </head>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";

        $conn=mysqli_connect($servername,$username,$password);

        if(!$conn)
        {
            die("Connection Failed".mysqli_connect_error());
        }
        $sql="CREATE DATABASE travel_db";
        if(mysqli_query($conn,$sql))
        {
            echo"\n Database created successfully";
        }
        else
        {
            echo"Error creating the database".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>