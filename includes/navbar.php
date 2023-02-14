<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #020e84; color: #ffffff">
    <div class="container">
      <a class="navbar-brand" href="https://citi.ac.ug/citiblog" style="color: #ffffff">CITI Blog</a>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
<?php
$navQuery = "SELECT * FROM menu";
$runNav=mysqli_query($db,$navQuery);
while($menu=mysqli_fetch_assoc($runNav)){
  $no = getSubMenuNo($db,$menu['id']);
  if(!$no){
    ?>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?=$menu['action']?>" style="color: #ffffff"><?=$menu['name']?></a>
      </li>
    <?php
      }else{
    ?>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?=$menu['action']?>" style="color: #ffffff"><?=$menu['name']?></a>
      </li>
    <?php
      }
    ?>

  <?php
}
?>
              
            
              
              
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline" type="submit" style="background-color:#0baa0f; color: #ffffff">Search</button>
      </form>
    </div>
  </div>
</nav>  