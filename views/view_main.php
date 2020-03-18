<div class="container">
<?php
foreach($data as $row){
echo '<div class="card mb-3">
<div class="row no-gutters">
  <div class="col-md-6">
  <img src="/'.$row["url"].'" class="card-img" title="'.$row["title"].'">
  </div>
  <div class="col-md-6">
    <div class="card-body">
      <h5 class="card-title">'.$row["title"].'</h5>
      <p class="card-text">'.mb_strimwidth($row["content"], 0, 503, '...').'</p>
<a href="http://cookbook/recipe/index?id='.$row["id"].'">Читати далі</a>
    </div>
  </div>
</div>
</div>';
}
?>
</div>