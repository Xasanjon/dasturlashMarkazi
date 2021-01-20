<?php
include("config.php");
$sqlParol="select * from login";
$logparol=mysqli_query($ulan,$sqlParol)or die("Sorov xato");

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
	<br><br>
	<div class="row">
		<form class="col-lg-4 offset-lg-4 col-sm-10 offset-sm-1">
  <div class="form-group">
    <label>Login</label>
    <input type="text" class="form-control" placeholder="Login..." name="login">
    
  </div>
  <div class="form-group">
    <label>Parol</label>
    <input type="password" class="form-control" placeholder="Parol..." name="parol">
  </div>
  <button type="submit" class="btn btn-primary" name="s0">Kirish</button>
</form>
	</div>
</div>

</body>
</html>
<?php
$ruxsat="yoq";
if (isset($_GET['s0'])) {
	$login=$_GET['login'];
	$parol=$_GET['parol'];
	while ($lpqator=mysqli_fetch_array($logparol,MYSQLI_ASSOC)) {
		if (($lpqator['login']==$login)&&($lpqator['parol']==$parol)) {
		$ruxsat="bor";
		?>
			<script type="text/javascript">
				window.location.href="kiritish.php";
			</script>
		<?php	
		}
	}

		if ($ruxsat=="yoq") {
			?>
				<script type="text/javascript">
					alert("Login yoki parol xato");
					window.location.href="index.php";
				</script>
			<?php
		}

}

?>


