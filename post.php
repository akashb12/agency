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
    if(isSet($_POST['sorting'])){
        $sort=implode("','",$_POST['sorting']);
        
        // echo $sort;

        if($sort=='freshness'){
            if($genredrop !='' || $languagedrop !=''){
        $sql="SELECT * FROM moviestb WHERE language ='".$languagedrop."' OR genre ='".$genredrop."' ORDER BY id DESC";
    }
    else{
        $sql="SELECT * FROM moviestb ORDER BY id DESC";
    }
}
    if($sort=='length'){
        if($genredrop !='' || $languagedrop !=''){
        $sql="SELECT * FROM moviestb WHERE language ='".$languagedrop."' OR genre ='".$genredrop."' ORDER BY duration +0 DESC";
        }
        else{
              $sql="SELECT * FROM moviestb ORDER BY duration +0 DESC";

        }
        
 
    }
   
      
     
    }
    
    
    

      $run =mysqli_query($con,$sql);
    //   echo mysqli_num_rows($run);
      $output='';
      if(mysqli_num_rows($run)>0){
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
else{
    echo "<h3>no products found</h3>";
}

}

// search
if(isSet($_POST['search'])){
    $search=$_POST['search'];
    $sql="SELECT * FROM moviestb WHERE title LIKE '%".$search."%'";


$run =mysqli_query($con,$sql);
//   echo mysqli_num_rows($run);
  
$output='';
if(mysqli_num_rows($run)>0){
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
}

// sort


?>
