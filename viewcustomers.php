<?php
  
// Username is root
$user = 'root';
$password = ''; 
$database = 'star_india_bank'; 
  
// Server is localhost with
// port number 3308
$servername='';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM customers ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!--HTML code to display data in tabular format-->

<!DOCTYPE html>
<html lang="en">
  
<head>
	<style type="text/css">
a{
  float: right;
  margin-right: 10px;
  margin-bottom: 10px;
  margin-top: 4px;
}
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
    <meta charset="UTF-8">
    <title>Customers Details</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <?php
    include 'config.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>
</head>
<body>
	<h2 class="text-center pt-4" style="color : black;">Customer's Bank Account Details</h2><br><br>
	<a href = "index.php"><button type="button" style="width: 100%; height: 50px; color: black; background-color: #90EE90; font-size: 18px; " class="btn btn-success">Go to Home Page</button></a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Current Balance</th>
    </tr>
  </thead>
  <tbody>
    <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['currentbalance'];?></td>
                
            </tr>
           <?php
                }
             ?>
  </tbody>
</table>
    <footer class="text-center mt-5 py-2">
            <center><p>&copy 2021. Made by <b>Prasad Patil</b> <br>Prasad Patil Foundation</p></center>
        </footer>
</body>
</html>
    


