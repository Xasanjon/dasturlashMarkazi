<?php 
$fann="";
if (isset($_GET['fan'])) {
	
$fan=$_GET['fan'];
$fann=$_GET['fan'];

if (isset($_GET['action'])) {
	if ($_GET['action']=="delete") {
		$idnomer=$_GET['id'];
		include("config.php");
		$sql="delete from markaz where id='{$idnomer}'";
		$res=mysqli_query($ulan,$sql)or die("Sorov xato");
		header("Location:korinish.php?fan={$fan}");
	}
	if ($_GET['action']=="edit") {
		$idnomer=$_GET['id'];
		$idj=$idnomer;
		
		header("Location:edit.php?idj={$idj}");
	}
}
}
	
include("config.php");
$sql="select * from markaz where fan='$fann'";
$res=mysqli_query($ulan,$sql)or die("Sorov xato");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ko'rish</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>

</head>
<body onload="funsana()">
<div class="container-fluid">
	<?php @require("navbar.php");?>
	<br>
	 <h5 style="text-transform: uppercase; text-align: center;"><?php echo $fann;?></h5>
	 <h6 style="color: gray; text-align: center;"><?php echo $son;?>
	 	nafar
	 </h6>
	 
	 
	<br>
	<div class="row">
	<div class="col table-responsive">
		<table class="table table-hover table-dark bg-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ism</th>
      <th scope="col">Tel nomer</th>
      <th scope="col">Fan</th>
      <th scope="col">Tahrir</th>
      <th scope="col">Ochirish</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$i=0;
  	while ($qator=mysqli_fetch_array($res,MYSQLI_ASSOC)) {
  		$i++;
  		$inp=$qator['id'];
  	?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $qator['ism'];?></td>
      <td><?php echo $qator['tel'];?></td>
      <td><?php echo $qator['fan'];?></td>
      <td><a class="btn btn-success" href="?fan=<?=$fan;?>&action=edit&id=<?=$inp;?>">Edit</a></td>
      <td><a class="btn btn-danger" href="?fan=<?=$fan;?>&action=delete&id=<?=$inp;?>">Delete</a></td>
    </tr>
<?php }?>
 
  </tbody>
</table>
	</div>

	</div>


</div>


</body>
</html>

