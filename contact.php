<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/skeleton.css" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  </head>
  <body>
  
 <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->
  
  </body>

<div class="topnav" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="portfolio.html">Portfolio</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<br>
<div class="wrapperdiv">
<p>Hello!  If you would like to contact me feel free to usitilize the form below, or you can email me directily at <a href="mailto:andrew.vilsack@gmail.com" target="_top">andrew.vilsack@gmail.com</a></p>
<br>
<div>
<form method="post" action="request.php"  name="requestform" id="requestform" >
  <h2>
    <p>Name:</p>
    <br>
    <input class="input" type="text" name="name" id="name" maxlength="50" />
  </h2>
  <h2>
    <p>Email:</p>
    <br>
    <input class="input" type="text" name="email" id="email" maxlength="50" />
  </h2>
  <h2>
    <p>Phone Number:</p>
    <br>
    <input class="input" type="text" name="phone" id="phone" maxlength="50" />
  </h2>
  <h2>
    <p>Comments:</p>
    <br>
    <textarea class="input" type="text" name="comments" id="comments" maxlength="500" rows="12"></textarea>
  </h2>

  <input type="submit" value="Submit contact information" />
  </form>
</div>
</div>




<script type="text/javascript" src="js/script.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</html>