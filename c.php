<?php 

$server ="localhost";
$username ="root";
$password ="";
$db="moviesdb";
$con =mysqli_connect($server,$username,$password,$db);
function selectLanguage($con){
    $output='';
    $sql="SELECT DISTINCT language FROM moviestb ORDER BY language";
    $run =mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run)){
        $output .= "<option value=".$row['language'].">".$row['language']."</option>";
      }
      return $output;
}
function selectGenre($con){
    $output='';
    $sql="SELECT DISTINCT genre FROM moviestb ORDER BY genre";
    $run =mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run)){
        $output .= "<option value=".$row['genre'].">".$row['genre']."</option>";
      }
      return $output;
}
function selectAll($con){
  $output='';
  $sql="SELECT* FROM moviestb";
  $run =mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($run)){
    $output.="<div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='./image/".$row['image']."' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>Title:".$row['title']."</h5>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>Duration:".$row['duration']."</li>
    <li class='list-group-item'>Genre:".$row['genre']."</li>
    <li class='list-group-item'>Language".$row['language']."</li>
  </ul>
 
</div>";
    }
    echo $output;
    
}
function selectArticles($con){
$output='';
$sql="SELECT * FROM `articles`";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
?>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
  for($i=1;$i<=$rowcount;$i++){
    $row=mysqli_fetch_array($result);
    
  

    ?>
    <?php
    echo $i;
    if($i==1){
    ?>

    <div class="carousel-item active">
    <img src="./articles/<?php echo  $row["image"] ?>" class="d-block w-100" alt="...">
  </div>
  <?php
    }
    else{
      ?>
      <div class="carousel-item">
    <img src="./articles/<?php echo $row["image"] ?>" class="d-block w-100" alt="...">
  </div>
  <?php
    }
  }
    ?>
 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php


}

?>