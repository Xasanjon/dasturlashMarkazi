<?php
include("config.php");
$sql="select * from fanlar";
$res=mysqli_query($ulan,$sql)or die("Sorov xato");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kiritish</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
</head>
<body>

<div class="container-fluid">
	<?php @require("navbar.php");?>
	<br><br>
	<div class="row">
	<form class="col-lg-4 offset-lg-4 col-sm-10 offset-sm-1">
  <div class="form-group">
    <label for="exampleInputEmail1">Ism kiriting</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ism kiriting..." name="ism" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefon nomer</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="+998 ..." name="tel" required="required">
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Fan tanlang</label>
    <select class="form-control" id="exampleFormControlSelect1" name="fan" required="required">
      <?php
      while ($qator=mysqli_fetch_array($res,MYSQLI_ASSOC)) {
        ?>
        <option><?=$qator['nom'];?></option>  
      
      <?php
      }
      ?>
      
      
      
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="s1">Saqlab qo'yish</button>
</form>
</div>
</div>
</body>
</html>

<?php
if (isset($_GET['s1'])) {
  $ism=addslashes($_GET['ism']);
  $tel=addslashes($_GET['tel']);
  $fan=addslashes($_GET['fan']);
  include("config.php");
  $sql="insert into markaz values('','$ism','$tel','$fan')";
  $row=mysqli_query($ulan,$sql)or die("sorovda xatolik");
  if ($row) {
    ?>
    <script type="text/javascript">
      alert("Bazaga saqlandi");
      window.location.href="kiritish.php";
    </script>
    <?php
  }
}
