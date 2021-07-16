<html>
    <head>
        <title>Basic Banking Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel='stylesheet' type='text/css' media="all">
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    .button {
  background-color: #FFFF66;
  border: none;
  color: #301934;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  margin-left: 100px;
  padding: 2px 10px;
  margin-right: 500px;
  margin-top: 5px;
  }
  @media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

  </style>
</head>
<body>
		<a href="index.php" class="button"><h3>Star India Banking</h3></a>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
		<i class="telephone"></i>
		<h4 class="number">800-400-299</h4>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="geoalt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
		<i class="geoalt"></i>
		<h4 class="address">Star street A/15 Sector-22 Thane(w)-399800</h4><br><br>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Star India Banking</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="viewcustomers.php">View Customers</a></li>
        <li><a href="transfermoney.php">Transfer Money</a></li>
        <li><a href="transaction.php">Transaction History</a></li>  
          </ul>
        </li>
      </ul> 
    </div>
  </div>
</nav>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/transfer.jpg" style="width:100%">
 <div class="text">Transfer money instantly from one Customer to another Customer</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/customerdata.png" style="width:100%">
  <div class="text1">View Customer Details</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/transaction.jpg" style="width:100%;height:77%">
  <div class="text2">View Customers's Transaction History</div>
</div>

</div>
<br>   

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 1.5 seconds
}
</script>
<div id="footer">
    Copyright &copy; Prasad Patil<br>
    Prasad Patil Organization
  </div>


</body>
</html>

