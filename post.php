<?php
include "./db/database.php";
if(isSet($_POST['languagedrop'])){
       
    if($_POST['languagedrop'] !=''){
    $sql="SELECT * FROM moviestb WHERE language ='".$_POST["languagedrop"]."'";

    }
    else{
        $sql ="SELECT * FROM moviestb";
   
      }
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
