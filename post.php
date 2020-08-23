<?php

include "./db/database.php";
if(isSet($_POST['action'])){
    $sql="SELECT * FROM moviestb WHERE id !=''";
    if(isSet($_POST['languagedrop'])){
      
        $languagedrop=implode("','",$_POST['languagedrop']);
        if( $languagedrop !=''){
    $sql .="AND language IN('".$languagedrop."')";
    
        }
    }
    
 if(isSet($_POST['genredrop'])){
    
   
        $genredrop=implode("','",$_POST['genredrop']);
        if($genredrop !=''){
    $sql .="AND genre IN('".$genredrop."')";
    // echo $sql;
    }
    }
    
    

      $run =mysqli_query($con,$sql);
    //   echo mysqli_num_rows($run);
      
      if(mysqli_num_rows($run)>0){
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
else{
    echo "<h3>no products found</h3>";
}

}
if(isSet($_POST['search'])){
    $search=$_POST['search'];
    $sql="SELECT * FROM moviestb WHERE title LIKE '%".$search."%'";


$run =mysqli_query($con,$sql);
//   echo mysqli_num_rows($run);
  
  if(mysqli_num_rows($run)>0){
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
}
?>
