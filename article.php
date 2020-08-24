<?php

include "./inc/body.php";


?>



<!-- articles -->
<h1>ADD ARTICLE</h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="article.php" enctype="multipart/form-data" method="post">
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="title">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea name="description" class="form-control" id="description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-10">
      <input type="file" name="image" class="form-control" id="image">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="article" class="btn btn-primary">
    </div>
  </div>
    </form>
        </div>
        <div class="col-md-4"></div>

    </div>

<?php
if(isSet($_POST['article'])){
  $title=$_POST['title'];
   
    $description =$_POST['description'];
    $image=$_FILES['image']['name'];
    $imagetmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($imagetmp,"./articles/$image");
    $sqlArticle= "INSERT INTO `articles` (`title`, `description`, `image`, `date`) VALUES ('$title', '$description', '$image',current_timestamp());";
   $runArticle =mysqli_query($con,$sqlArticle);
   if($runArticle){
       echo "upload successful";
       echo "<script>window.open('article.php','_self')</script>";
   }
   else{
    echo "upload unsuccessful";
    echo "<script>window.open('post.php','_self')</script>";
   }
}
?>
 