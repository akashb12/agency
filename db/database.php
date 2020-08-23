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


?>