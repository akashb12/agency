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
          <a class="nav-link" href="article.php">Article</a>
        </li>
       
       
      </ul>
    
        <input class="form-control mr-sm-2" type="text" name="search" id="searchId" placeholder="Search" aria-label="Search">
        
    </div>
  </nav>
  <div class="form-group" id="show">
  <label for="exampleFormControlSelect1">Filter By Language</label>
  <select class="form-control same" name="language" id="language">
  <option value="">Show all</option>
  <?php echo selectLanguage($con); ?>
  </select>
  
  </div>
  
  <div class="form-group" >
  <label for="exampleFormControlSelect1">Filter By Genre</label>
  <select class="form-control same" name="genre" id="genre">
  <option value="">Show all</option>
  <?php echo selectGenre($con); ?>
  </select>
  
  </div>
  <div class="form-group" >
  <label for="exampleFormControlSelect1">Sort</label>
  <select class="form-control samesort" name="sort" id="sort">
  <option value="freshness">Freshness</option>
  <option value="length">Length</option>
  </select>
  
  </div>
  <div  id="all">
  <?php 

  echo selectAll($con); ?>
  </div>
  
</body>
</html>
<!-- SCRIPT FOR SEARCH -->
<script type="text/javascript">
$(document).ready(function(){
  $("#searchId").keyup(function(){
    var search= $(this).val();
    // console.log(search);
    $.ajax({
  url:"post.php",
  method:"POST",
  data:{search:search},
 
  success:function(data){
    $('#all').html(data);
  }
  
})

  });
});
</script>

<!-- SCRIPT FOR SORT -->
<script>
$(document).ready(function(){
$('#sort').change(function(){
var sorting= $(this).val();
console.log(sorting);
$.ajax({
  url:"post.php",
  method:"POST",
  data:{sorting:sorting},
  success:function(data){
    $('#all').html(data);
  }
})
});
});
</script>


<!-- SCRIPT FOR FILTER -->
<script type="text/javascript">
$(document).ready(function(){
$('.same').change(function(){
  var action='data';

var languagedrop= get_filter_text('language');
var genredrop= get_filter_text('genre');
console.log("language:"+languagedrop);
console.log("genre:"+genredrop);



$.ajax({
  url:"post.php",
  method:"POST",
  data:{action:action,languagedrop:languagedrop,genredrop:genredrop},
 
  success:function(data){
    $('#all').html(data);
  }
  
})
});
function get_filter_text(text){
var filterData =[];

$('#'+text+' option:selected').each(function(){
  filterData.push($(this).val());


});
console.log(filterData);
return filterData;

}

});
</script>


  
