<?php
$con =mysqli_connect("localhost","root","","form");
if($con->connect_error)
{
    echo "Connection is not done";
}
else
{
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST["name"];
        $password = $_POST["password"];

        $qry = "SELECT * FROM form WHERE username='$name'";
        
        $response_user = $con->query($qry);
        if($response_user->num_rows==0)
        {
            echo "user not found";
        }
        else
        {
            $pass = "SELECT * FROM form WHERE password='$password'";
            $response_pass = $con->query($pass);
            if($response_pass->num_rows == 0)
            {
                echo "Password wrong";
            }
            else
            {
            header('location:slambookpage');
            }
        }
    }
    
}



?>