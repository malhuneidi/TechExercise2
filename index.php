<!DOCTYPE html>
<html>
<title>Video Games Search Engine</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body {padding:0; height:100%;}
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
body{
	overflow-x:hidden;
}

input[type=text ]{
width:330px;
      box-sizing: border-box;
border: 2px solid #ccc;
	border-radius:4px;
	font-size:16px;
	background-color: white;
	background-image: url('searchicon.png');
	background-position:10px 10px;
	background-repeat: no-repeat;
padding : 12px 20px 12px 12px;
	  -webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}

footer{
width:100%;
position:absolute;
bottom:0;
}
input[type=text]:focus{
width:50%;
}
</style>

<body>
<div class="w3-container w3-padding-44 w3-light-grey w3-center">

<div class="w3-padding-62">
<div class="w3-btn-bar w3-border w3-show-inline-block w3-left">
<a href="index.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Homepage</a>

<a href="add.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Add to Database</a>
<a href="delete.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Remove from Database</a>

</div>
</div>

</div>
<!-- !PAGE CONTENT! -->

<!-- Header -->
<header class="w3-panel w3-padding-228 w3-center w3-opacity">
<h1 class="w3-xlarge">VG Engine</h1>
<h1>Search For Your Favorite PC Games!</h1>
</header>
<div class="w3-btn-bar ">



<form method='get' action="./search.php" id="searchform" align="center">
<input  type ="text" name ="information" placeholder="Search.."> <br>
</p></form>
</div>


<!-- Footer -->
<footer class=" w3-padding-64 w3-light-grey w3-center"> 
<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
<a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
<p>Powered by Amazon's Web Service Server</p>
</footer>
</body>
</html>


