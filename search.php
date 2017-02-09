<!DOCTYPE html>
<html>


<title>Video Games Search Engine</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






<style>

html, body {padding:0; height:100%;}
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

    .button {
        color: gray;
        font-family: "Raleway, Arial, sans-serif";
        width:130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius:4px;
        font-size:16px;
        margin:0 auto;
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
<a href="index.php" class="w3-btn w3-border w3-xlarge w3-opacity">Homepage</a>
      
<a href="add.php" class="w3-btn w3-border w3-xlarge w3-opacity">Add to Database</a>
	<a href="delete.php" class="w3-btn w3-border w3-xlarge w3-opacity">Delete from Database</a>
    
</div>
  </div>

</div>

<!-- Header -->
<header class="w3-panel w3-padding-228 w3-left w3-opacity">
<h1 class="w3-xlarge">VG Engine</h1>

</header>
<div class="w3-btn-bar  ">





<form method='get' action="./search.php" id="searchform" align="left">
<input  type ="text" name ="information" placeholder="Search..." value='<?php echo $_GET ['information']; ?>'/>
<p> </p>
</form>
</div>
<div align="left" style="overflow-y: scroll; height:550px; padding-left: 2m; " >
<?php 
// connect
$con = @mysqli_connect("localhost","malhuneidi","password123","VEngine") OR die ('Could not connect to 
		MySQL ' .mysqli_connect_error());

$information= $_GET['information']; 
$data="SELECT title, review, link FROM videogames WHERE title LIKE '%$information%'";
$raw_results =$con->query($data);
$row_count = $raw_result->num_rows;
$count=0;

while($row =$raw_results->fetch_assoc()){
	$count++;
}

$row=0;
$raw_results =$con->query($data);
$row_count = $raw_result->num_rows;

if($count >= 1){
	echo " <h1>Results found for $information</h1>";
        echo " <h2> Found $count results </h2>";
	while($row = $raw_results->fetch_assoc()){

		printf("<h3 class=\"w3-light-grey\">%s </h3><h4>Review:</h4> %s  </br> ",$row["title"],$row["review"]);
		echo "</br> <h4>Link:</h4> <a href='".$row["link"]."'> Click Here </a> </br> </br> ";

	}
}
else{ // if there is no matching rows do following
	echo "<h1> No Results Found!</h1>";

}




?>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center">
<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
<a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
<p>Powered by Amazon's Web Service Server</p>
</footer>




</body>
</html>
