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



?>