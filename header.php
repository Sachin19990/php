          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <img class="main" src="images/download.png">
                <?php 
                  $menu = array("Home","About","Company","Contact");
                  echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0 '>";
                    for($i=0;$i<1;$i++){
                            echo "<li class='link'><a class='nav-links' href='http://localhost/practice/navbar/form.php'> $menu[0]</a></li>";
                            echo "<li class='link'><a class='nav-links' href='http://localhost/practice/navbar/form.php'> $menu[1]</a></li>";
                            echo "<li class='link'><a class='nav-links' href='http://localhost/practice/navbar/form.php'> $menu[2]</a></li>";
                            echo "<li class='link'><a class='nav-links' href='http://localhost/practice/navbar/form.php'> $menu[3]</a></li>";
                    }
                  echo "</ul>";
                ?>
                <form class="d-flex my-2">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>