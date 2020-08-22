<?php
include "./db/database.php";
?>
<!-- navbar start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media_For_you</title>
   <!-- CSS only -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    img{
    float:left;
    margin:5px;
    width: 300px;
    height: 140px;
}
section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
nav.navb {
    display: flex;
    justify-content: center;
}
body {
    PADDING: 20px 20px;
}
</style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Movies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       
        <li class="nav-item">
          <a class="nav-link" href="post.php">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="article.php">Article</a>
        </li>
       
       
      </ul>
      <form class="form-inline my-2 my-lg-0" action="" method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
        <button name="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container" id="show_product">
  <select name="brand" id="brand">
  <option value="">Show all</option>
  <?php echo selectLanguage($con); ?>
  </select>
  </div>
  
</body>
</html>
<script>
$(document).ready(function(){
$('#brand').change(function(){
var languagedrop= $(this).val();
$.ajax({
  url:"post.php",
  method:"POST",
  data:{languagedrop:languagedrop},
  success:function(data){
    $('#show_product').html(data);
  }
})
});
});
</script>
  
