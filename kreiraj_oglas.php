<?php
include("includes/connection.php");
session_start();
 if(!isset($_SESSION['user']) || empty($_SESSION['user']))
    {
		 
	}
	else
	{
          
  	if (isset($_POST['upload'])) {
	  $zivotno = $_POST["zivotno"];

	  $pol = $_POST["pol"];
	  $vozrast = $_POST["vozrast"];

	  if (isset($_POST["vakcinirano"]))
	  $vakcinirano="da";
	  else
	  $vakcinirano="ne";

	  if (isset($_POST["chipirano"]))
	  $chipirano="da";
	  else
	  $chipirano="ne";

	  $opis = $_POST["opis"];
	  $drzava = $_POST["country"];
	  $opstina = $_POST["state"];
	  $user = $_SESSION["user"];

	  

  	$image = $_FILES['image']['slika'];
  	$target = "images/".basename($image);

  	
	   if($zivotno == "kuce")
	  {
		  $rast = $_POST["rast"];
		  $sql = "INSERT INTO kuce (rast, pol, opstina, drzava, vakcinirano, chipirano, vozrast, user_username, slika, opis) VALUES ('$rast', '$pol', '$opstina', '$drzava', '$vakcinirano', '$chipirano', '$vozrast', '$user', '$image', '$opis')";

	  }
	  else
	  {
		  $sql = "INSERT INTO mace (pol, opstina, drzava, vakcinirano, chipirano, vozrast, user_username, slika, opis) VALUES ('$pol', '$opstina', '$drzava', '$vakcinirano', '$chipirano', '$vozrast', '$user', '$image', '$opis')";
	  }
	  
	  if (!mysqli_query($conn, $sql)) 
    {
	?>
<script charset="utf-8">
window.open('zivotno.php', '_self');
</script> <?php
    }
    else
    {
		?>
<script charset="utf-8">
alert('Настана грешка при креирањето на оглас. \nВе молиме обидете се повторно.');
history.back();
</script>
<?php
        
    }
	  
	  

  }
  
}

?>