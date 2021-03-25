<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet"> 
<title>Daugybos lentelė</title>
</head>
<body>
<div class="wrapper">
<form action="generatorius.php" method="get">
 <?php 
 if(isset($_GET['pasirink'])&& isset($_GET['lygis'])){
    $pasirink=$_GET['pasirink'];
    $lygis=$_GET['lygis'];  
} else {
    $pasirink=2;
    $lygis=0;
}
?>
 
<h1>Daugybos lentelė</h1>
<h2>Pasirinkite:</h2>

<div class="block">
<div class="skaiciai" >Skaičių kiekis:<br>
<input type="radio" name="pasirink" value="5">1-5<br> 
<input type="radio" name="pasirink" value="10">1-10 <br>
<input type="radio" name="pasirink" value="15">1-15<br>
</div>
<div class="lygis" >Sudėtingumas:<br>
<input type="radio" name="lygis"  value="8"> Lengvas<br> 
<input type="radio" name="lygis" value="5"> Vidutinis<br>
<input type="radio" name="lygis" value="2"> Sudėtingas<br>
</div>
</div>
<input class="button" type="submit" value="Generuoti">
 </form>
<table>
 
<?php for ($i=1; $i<=$pasirink; $i++){?>
<tr>
 <?php for ($y=1; $y<=$pasirink; $y++){?>
<td><?php if ($i==1||$y==1){?>
			<?=$i*$y?>
	<?php } else if (rand(1,10)<=$lygis){?>
		<?=$i*$y?>
	 <?php }?>
 </td>
<?php }?>
</tr>
<?php }?>

</table><br>

</div>

</body>
</html>
