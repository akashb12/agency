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
    echo "<div id='img_div'>";
    echo "<img src='./image/".$row['image']."'>";
    
    echo "</div>";
    echo "<div id='img'>";
    echo "<p>Title:".$row['title']."</p>";
    echo "</div>";
    echo "<div id='img'>";
    echo "<p>Duration:".$row['duration']."</p>";
    echo "</div>";
    echo "<div id='img'>";
    echo "<p>Genre:".$row['genre']."</p>";
    echo "</div>";
    echo "<div id='img'>";
    echo "<p>Language".$row['language']."</p>";
    echo "</div>";
    
    }
    
}


?>