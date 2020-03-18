<div class="container">
<?php foreach($data as $row){
echo '<div class="card mb-3">
<div class="col-md-8">
  <img src="/'.$row["url"].'" class="card-img" title="'.$row["title"].'">
  </div>
  <div class="card-body">
    <h5 class="card-title">'.$row["title"].'</h5>
    <p class="card-text">'.$row["ingredients"].'</p>
    <p class="card-text">'.$row["content"].'</p>
    <p>Автор: <a href="http://cookbook/author/index?id='.$row["author_id"].'">'.$row["name"].'</a></p>
    <p>Категорія: <a href="http://cookbook/category/index?id='.$row["category_id"].'">'.$row["category_title"].'</a></p>
    <p>'.$row["views"].' переглядів</p>
  </div>
</div>';
}
?>
</div>