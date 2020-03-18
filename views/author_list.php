<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Автори
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php 
        foreach($authors as $row){            
            echo '<a class="dropdown-item" href="http://cookbook/author/index?id='.$row["author_id"].'">'.$row["name"].'</a>';
        }

  ?>
          </div>
          </li>
    

</ul>
    
    </div>
    <img src="\views\img\29422-3-cooking-image.png" width="60px">
  </div>

  </nav>
  