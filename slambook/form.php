
<?php
$_SERVER="localhost";
$_username="root";
$_password="";

$conn=mysqli_connect($_SERVER,$_username,$_password);

if(!$conn){
    echo "<script>
            alert('Connection Failed!!.mysqli_connect_error()');
            window.location.href='index.php';
            </script>";            

}
 
$name1=$_POST['name'];
$email1=$_POST['email'];
$contact1=$_POST['contact'];
$password1=$_POST['password'];
                 //DBMS   //table
//$sql="INSERT INTO `form`.`form` (`name1`, `email1`, `contact1`, `password1`) VALUES ";
               //             (name)                                                         (id name=database name)                                                      
$sql=" INSERT INTO `form`.`form` (`id`, `name1`, `email1`, `contact1`, `password1`) VALUES(NULL,'$name1', '$email1', '$contact1', '$password1') ";

if($conn->query($sql)==true){
    echo "<script>alert('Welcome $name1 !!');window.location.href='slambookpage.php';</script>";
 
}

else{
    echo"ERROR:$sql<br> $conn->error";
}
$conn->close();

?>
