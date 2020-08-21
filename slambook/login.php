<?php
  
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       
        $x=$_POST['name'];
        $y=$_POST['password'];
      
      if($x=="form"&&$y=="form")
	{
                $_SESSION["status"]="Active";
      header("Location:slambookpage.php");
	}
	else
	{
      $link = mysqli_connect('localhost','root','');
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }  
       mysqli_select_db($link,"form");
      $sql = "SELECT * FROM `form` WHERE name= '$x' and password = '$y'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      $name = $row["name"];      
      $count = mysqli_num_rows($result);                
      // If result matched $myusername and $mypassword, table row must be 1 row
	 if($count==1) 
         {
            $_SESSION["nm"] = $name;
            $_SESSION["status"]="Active";
            $_SESSION["id"] = $x;
            header("location: slambookpage.php");
         }
      else if($count==0)
        {
          echo "<script>
            alert('Wrong Login id or password! Create new account or try again.');
            window.location.href='index.php';
            </script>";            
        }
        }
        echo "Stop trying that shitty hack!";
   }

?>