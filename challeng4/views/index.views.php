<?php include_once 'entete.php'; 
   include_once '../database.php';  
?>
    <center> <h1> <u>ESSAI</u></h1>
		<br>
		<form action="" method="post"> 
			<input type="submit" name="submit" value="Click On Me!!" style="width:100px;">
		</form>
	</center>
  <?php
if (isset($_POST['submit'])) 
{
    // requete
    $sql = " SELECT * FROM usercc";
    $result = mysqli_query($conn1, $sql);
	foreach ($result as $decodage) 
    {
    	// recupération des data 
    	$id = $decodage['id'];
    	$code = $decodage['cnumber'];
    	//debut du process
    	$verif = substr($code, 0,1);
    	if ($verif == "X") 
    	{
    	    $newcode = str_replace("X","5",$code);
    		$rq1 = "UPDATE usercc SET cnumber = '$newcode' WHERE id = '$id'";
    		$resultat = mysqli_query($conn1, $rq1);
    	}
    	else if ($verif == "Y") 
    	{
    		$newcode = str_replace("Y","3",$code);
    		$rq1 = "UPDATE usercc SET cnumber = '$newcode' WHERE id = '$id'";
    		$resultat = mysqli_query($conn1, $rq1);
    	}
    	else if ($verif == "Z") 
    	{
            $newcode = str_replace("Z","4",$code);
    		$rq1 = "UPDATE usercc SET cnumber = '$newcode' WHERE id = '$id'";
    		$resultat = mysqli_query($conn1, $rq1);
    	}
    	else
    	{
    		echo "ERROR";
    	}
    }
}
?>
<?php include_once 'footer.php'; ?>