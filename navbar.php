<?php
include("config.php");
$sql2="select * from fanlar";
$res2=mysqli_query($ulan,$sql2)or die("Sorov xato");


?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #470137;">
  <a class="navbar-brand" href="kiritish.php">Markaz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="kiritish.php">Kiritish <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fanlar
        </a>
        <div class="dropdown-menu" style="background-color: #470137;" aria-labelledby="navbarDropdownMenuLink">
          <?php
      while ($qator2=mysqli_fetch_array($res2,MYSQLI_ASSOC)) {
        $ichi=$qator2['nom'];
        $sanab="select count(id) as soni from markaz where fan='$ichi'";
        $sanabres=mysqli_query($ulan,$sanab)or die("Sorov xato");
        $sanabqator=mysqli_fetch_array($sanabres,MYSQLI_ASSOC);
        $son=$sanabqator['soni'];

        ?>
         
        <a class="dropdown-item" style="color: orange;" href="korinish.php?fan=<?=$qator2['nom'];?>"><?=$qator2['nom'];?>
          <span class="badge badge-light"><?=$son;?></span>
        </a>
      
      <?php
      }
      ?>
          
          
        </div>
      </li>
    </ul>
  </div>
</nav>
  <script type="text/javascript">
    function funsana() {
      <?php
      $sanab="select count(id) as soni from markaz where fan='$fan'";
      $sanabres=mysqli_query($ulan,$sanab)or die("Sorov xato");
      $sanabqator=mysqli_fetch_array($sanabres,MYSQLI_ASSOC);
      $son=$sanabqator['soni'];
  
    ?>}
  </script>