<div class="list-group pt-4">
  <a href="#" class="list-group-item list-group-item-action active " aria-current="true">
      Our Team
    </a>
        <?php 
          $menu = array("Yash Sharma","Sachin Sharma","Harshit Hora","Michal");
          for($i=0;$i<4;$i++){
                  echo "<a href='#' class='list-group-item list-group-item-action'> $menu[$i]</a>";
          }
        ?>
    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Thank-You</a>
</div>



<div class="list-group pt-4">
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
          Our Bookings
        </a>
    <?php
      $a = "months";
      if($a == "weeks"){
        echo "<a href='#' class='list-group-item list-group-item-action pt-2'> Sunday <br> </a>" ;
        echo "<a href='#' class='list-group-item list-group-item-action'> Monday <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> Tuesday <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> Wednesday <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> Thursday <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> Friday <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> Saturday <br><a/>";
      }
      else{
        echo "<a href='#' class='list-group-item list-group-item-action'> Janruary <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> February <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> March <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> April <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> May <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> June <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> July <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> August <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> September <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> October <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> November <br><a/>";
        echo "<a href='#' class='list-group-item list-group-item-action'> December <br><a/>";
      }
    ?>
    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Thank-you</a>
</div>