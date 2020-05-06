<!-- <?php 
  $bd = new PDO('mysql:host=localhost;dbname=truelove','root','');
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

?> -->
<?php 
    $dbhost = 'localhost';

    $dbuser = 'root';

    $dbpass = '';
            
    $conn1 = mysqli_connect($dbhost, $dbuser, $dbpass, 'truelove');

    if (mysqli_connect_errno())
	 {
	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 
?>
<?php 
    $dbhost = 'localhost';

    $dbuser = 'root';

    $dbpass = '';
            
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'ivoiredating');

    if (mysqli_connect_errno())
	 {
	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 }
	 
?>