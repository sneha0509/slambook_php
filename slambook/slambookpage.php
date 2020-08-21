<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Slambook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!--<style>
	body{
		background-image:url("5.png");
		background-repeat:no-repeat;
		background height: 200px;
		background-color: #000000;
	}
	.button{
	background-color: #7FFF00;
	border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 15%;
   
}
.text{
	font-style:italic;
	color: white;
}
</style>-->
<style>
  .navbar {
  margin-bottom: 0;
  background-color: #f4511e;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #f4511e !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
.bg{
	background-image:url("4.png");
}
.btn{
	background-color:#f4511e;
	color:#fff;
}
</style>
<body>
<!--navbar-->
<div class="container">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" class="bg">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand">Slambook.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-right">
		<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

<BR><br><br>

<form action="slam.php" method="post">


      <div class="row">
        <div class="col-sm-6 form-group">
		<input class="form-control"  name="your_name" placeholder="Enter your name..." type="text" required><br>
		<input class="form-control"  name="your_best_friend" placeholder="your best friend..." required>
        </div>
        <div class="col-sm-6 form-group" class="style">
		Are you in a Relationship:
			 YES<input type="radio" name="relation">
			 NO<input type="radio" name="relation"><br>
		Do you have crush on Someone:
		  YES<input type="radio" name="crush">
		   NO<input type="radio" name="crush"><br>
		</div>
      <div class="col-sm-6 form-group">
	  <input type="text" class="form-control" name="your_hobbies" placeholder="your hobbies...." required><br>
	  <input class="form-control" type="text" name="dream" placeholder="your dream..." required>
	  </div>
	  <div class="col-sm-6 form-group">
	  <input class="form-control" type="text" name="aim" placeholder="your aim of life.."required><br>
	  <input  class="form-control"type="text" name="fantasy" placeholder="your biggest fantasy..." required>
	  </div>
	  <div class="col-sm-6 form-group">
	  <input class="form-control" type="text" name="r_j" placeholder="your fav R.J..." required><br>
	  <input class="form-control" type="text" name="d_j" placeholder="your fav D.J" required>
	  </div>
	  <div class="col-sm-6 form-group">
	  <input class="form-control" type="text" name="movie" placeholder="your fav movie..." required><br>
	  <input class="form-control" type="text" name="celebrity" placeholder="your fav celebrities..." required>
	  </div>
	  <div class="col-sm-6 form-group">
	  <input class="form-control" type="text" name="ws_tv" placeholder="your fav Web series or tv show..." required><br>
	  <input class="form-control" type="text" name="place" placeholder="your fav place..." required>
	  </div>
	  <div class="col-sm-6 form-group">
	  <textarea  class="form-control" name="likes" placeholder="your likes..."></textarea><br>
	  <textarea class="form-control" name="dislikes" placeholder="your dislikes..."></textarea>
	   
	  </div>
	  
	  
	   
	   <div class="col-sm-6 form-group">
		   
		 Do you hate Someone:YES<input type="radio" name="radio_hate">
		 NO<input type="radio" name="radio_hate">
	 
	  <textarea class="form-control"name="secret" placeholder="any secrets you like to share...." required></textarea>
	  </div>
	
        <div class="col-sm-12 form-group" class="btm">
     <button class="btn btn-default pull-right" type="submit">SUBMIT</button>
        </div>

  
 
</form>
  

</body>
</html>