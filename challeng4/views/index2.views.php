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
{// requete
    $sql= " SELECT * FROM userccbilling";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $decodage) 
    {// recupération des data 
    	$id = $decodage['id'];
		$code = $decodage['type'];
		$code2 = $decodage['cnumber'];
    	//debut du process
    	$verif = substr($code, 0,1);
    	if ($verif == "M") 
    	{
    	 $newcode = str_replace("F","5",$code2);
    		$rq = "UPDATE userccbilling SET cnumber = '$newcode' WHERE ID = '$id'";
    		$resultat = mysqli_query($conn, $rq);
    	}
    	else if ($verif == "A") 
    	{
    		 $newcode = str_replace("F","3",$code2);
    		$rq = "UPDATE userccbilling SET cnumber = '$newcode' WHERE id = '$id'";
    		$resultat = mysqli_query($conn, $rq);
    	}
    	else if ($verif == "V") 
    	{
            $newcode = str_replace("F","4",$code2);
    		$rq = "UPDATE userccbilling SET cnumber = '$newcode' WHERE id = '$id'";
    		$resultat = mysqli_query($conn, $rq);
    	}
    	else
    	{
    		echo "ERROR";
    	}
    }
}
?>
<?php include_once 'footer.php'; ?>