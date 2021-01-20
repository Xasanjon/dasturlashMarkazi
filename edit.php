<?php

include("config.php");
$sql3="select * from fanlar";
$res3=mysqli_query($ulan,$sql3)or die("Sorov xato");


if (isset($_GET["idj"])) {
  $idj=$_GET["idj"];
  include("config.php");  
  $sql5="select * from markaz where id={$idj}";
  $row5=mysqli_query($ulan,$sql5)or die("sorovda xatolik");
  $qator5=mysqli_fetch_array($row5,MYSQLI_ASSOC);
    $ismj=$qator5['ism'];
    $telj=$qator5['tel'];
    $fanj=$qator5['fan'];
 }
if (isset($_GET['s2'])) {
  $idj=$_GET['idj'];
  $ism=addslashes($_GET['ism']);
  $tel=addslashes($_GET['tel']);
  $fan=addslashes($_GET['fan']);
  include("config.php");
  $sql4="update markaz set ism='{$ism}',tel='{$tel}',fan='{$fan}' where id={$idj}";
  $row4=mysqli_query($ulan,$sql4)or die("sorovda xatolik");
  if ($row4) {
        $fann=$fan;
}
    
    header("Location:korinish.php?fan=$fann");
  }


  ?>

<!DOCTYPE html>
<html>
<head>
  <title>O'zgartirish</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="bootstrap.js"></script>
  <script type="text/javascript">
  function fun1() {
    
    x=document.getElementsByTagName('option'); 
    
    for (var i = 0; i < x.length; i++) {
      
      if (x[i].value=='<?=$fanj;?>') {
        document.getElementById("fanlar").value=x[i].value;

      }
    } 
  }
  </script>
</head>
<body onload="fun1()">

<div class="container-fluid">
  <?php @require("navbar.php");?>
  <br><br>
  <div class="row">
  <div class="col-2"></div>
  <form class="col-8" name="forma">
    <div class="form-group">
    <input type="hidden" class="form-control" aria-describedby="emailHelp" name="idj" value="<?=$idj;?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ism kiriting</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" placeholder="Ism kiriting..." name="ism" value="<?=$ismj;?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefon nomer</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="+998 ..." required="required" name="tel" value="<?=$telj;?>">
  </div>
    <div class="form-group">
    <label for="fanlar">Fan tanlang</label>
    <select class="form-control" required="required" name="fan" value="<?=$fanj;?>" id="fanlar">
      <?php
      while ($qator3=mysqli_fetch_array($res3,MYSQLI_ASSOC)) {
        ?>
        <option class="option" value="<?=$qator3['nom'];?>"><?=$qator3['nom'];?></option>  
      
      <?php
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="s2" value="jona">Saqlab qo'yish</button>
</form>
<div class="col-2"></div>
</div>


</div>

</body>
</html>