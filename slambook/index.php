<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slambook.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
  background-color: #f4511e; /* Orange */
  color: #ffffff;
}
.bg-grey {
  background-color: #f6f6f6;
}
  .container-fluid {
    padding: 60px 50px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
   .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
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
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
body {
  font: 400 15px Lato, sans-serif;
  line-height: 1.8;
  color: #818181;
}

.jumbotron {
  font-family: Montserrat, sans-serif;
}

.navbar {
  font-family: Montserrat, sans-serif;
  
}
h2 {
  font-size: 24px;
  text-transform: uppercase;
  color: #303030;
  font-weight: 600;
  margin-bottom: 30px;
}

h4 {
  font-size: 19px;
  line-height: 1.375em;
  color: #303030;
  font-weight: 400;
  margin-bottom: 30px;
}
.slideanim {visibility:hidden;}
.slide {
  /* The name of the animation */
  animation-name: slide;
  -webkit-animation-name: slide;
  /* The duration of the animation */
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  /* Make the element visible */
  visibility: visible;
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
  0% {
    opacity: 0;
    transform: translateY(70%);
  }
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
@-webkit-keyframes slide {
  0% {
    opacity: 0;
    -webkit-transform: translateY(70%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0%);
  }
}
.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
}
</style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#galery">GALLERY</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#signin">SIGNUP</a></li>
      </ul>
    </div>
  </div>
</nav>

<form class="form-inline" action="log.php" method="post">
<div class="jumbotron text-center">
<h1>Slambook.com</h1>
<p><i>Were The World Connects......</i></p>

    <div class="input-group">
      <input type="text" class="form-control" name="name" size="50" placeholder="User Name" required>
      <input type="password" class="form-control" name="password" size="50" placeholder="Password" required>
    
        <button type="submit" class="btn btn-danger">LOGIN</button>
      </div>
</div>
</form>


<!-- Container (About Section) -->
<div class="container-fluid" id="about">
  <h2>About Us</h2>
  <h4>A diary in which you "knock" your friends</h4>      
  <p>A slam book is a notebook (commonly the spiral-bound type) which is passed among children and teenagers. The keeper of the book starts by posing a question (which may be on any subject) and the book is then passed round for each contributor to fill in their own answer to the question. Slam books were also a source of bullying between students—where students "lived in fear" of the "biting comments" written anonymously under their names, "on the order of what today might be a Tweet or a Facebook comment".[2] A slam book containing cruel comments was featured in episode 3.20 ("Kids Can Be Cruel") of the 1980s TV show Facts of Life.[3] One early reference to slam books can be found in the November 18, 1928 issue of The Central New Jersey Home News where it was reported as a new fad among New Brunswick high school students. It was defined in The Vocabulary of Jazzdom in 1922 as "a diary in which you "knock" your friends". One newspaper article from 1930 argued that slam books could be a great thing for humanity.</p>
  <a href="https://www.facebook.com/profile.php?id=100047009811145"><button class="btn btn-default btn-lg">Get in Touch</button></a>
</div>


<!-- galery (Portfolio Section) -->
<div class="container-fluid text-center bg-grey" id="galery">
  <h2>Gallery</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="1.jpg" alt="Paris" width="400" height="300">
        <p><strong>New Year Party</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="2.jpg" alt="New York" width="400" height="300">
        <p><strong>6 IDIOTS</strong></p>
        <p>We built New York</p>
      </div>
      <div class="thumbnail">
        <img src="3.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>MEMORIES</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="thumbnail">
        <img src="4.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>SOO SUNNY DAY...</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="thumbnail">
        <img src="5.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>UNITIANS</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div>
</div>

<!--form-->
<div class="container-fluid bg-grey" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Uttar Pradesh,Prayagraj</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01 6394496154</p>
      <p><span class="glyphicon glyphicon-envelope"></span> snehacs9936797947@gmail.com</p>
    </div>

   
    <form method="post" action="mail.php">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name2" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email2" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments2" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="sendmail">Send</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<!---sign in-->
<form action="form.php" method="Post">
<div class="container-fluid bg-grey" id="signin">
  <h2 class="text-center">SIGN UP</h2>

      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name1" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email1" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <input class="form-control" id="contact1" name="contact" placeholder="Contact number" rows="5" required><br>
       <input class="form-control" id="password1" name="password" placeholder="Type any password" rows="5" type="password" required><br>
      <div class="row">
        <div class="col-sm-12 form-group">
     <button class="btn btn-default pull-right" type="submit">REGISTER</button>
        </div>
      </div>
  
</div>
</form>
  




<!--footer-->
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Theme Made By <a href="https://www.facebook.com/profile.php?id=100047009811145" title="Visit w3schools">Sneha Tripathi</a></p>


<!--smooth scrollinf of navbar-->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
   $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>