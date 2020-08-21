<?php
$_SERVER="localhost";
$_username="root";
$_password="";


$conn=mysqli_connect($_SERVER,$_username,$_password);

if(!$conn){
    die("Connection Failed!!".mysqli_connect_error());
}
 
$a=$_POST['your_name'];
$b=$_POST['your_best_friend'];
$c=$_POST['relation'];
$d=$_POST['crush'];
$e=$_POST['your_hobbies'];
$f=$_POST['dream'];
$g=$_POST['aim'];
$h=$_POST['fantasy'];
$i=$_POST['r_j'];
$j=$_POST['d_j'];
$k=$_POST['movie'];
$l=$_POST['celebrity'];
$m=$_POST['ws_tv'];
$n=$_POST['place'];
$o=$_POST['likes'];
$p=$_POST['dislikes'];
$q=$_POST['radio_hate'];
$r=$_POST['secret'];
                 //DBMS   //table
//INSERT INTO `form`.`slampage` (`your_name`, `your_best_friend`, `relation`, `crush`, `your_hobbies`, `dream`, `aim`, `fantasy`, `r.j`, `d.j`, `movie`, `celebrity`, `ws_tv`, `place`, `likes`, `dislikes`, `radio_hate`, `secret`) VALUES 
$sql="INSERT INTO `form`.`slampage` (`id`, `date`, `your_name`, `your_best_friend`, `relation`, `crush`, `your_hobbies`, `dream`, `aim`, `fantasy`, `r_j`, `d_j`, `movie`, `celebrity`, `ws_tv`, `place`, `likes`, `dislikes`, `radio_hate`, `secret`) VALUES (NULL, current_timestamp(),'$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r')";


if($conn->query($sql)==true){
    echo "<script>alert('Thankyou $a !!');window.location.href='index.php';</script>";
 
}

else{
    echo"ERROR:$sql<br> $conn->error";
}
$conn->close();

?>
