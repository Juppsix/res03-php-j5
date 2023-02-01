<?php 
require './index.php';
function mult(int $nb1, int $nb2) : int
 
{
if(isset($_POST['calculator']))
 {
      if ($op=="Multiplication") { // Je selectionne Multiplication
          echo $nb1*$nb2;
      }
}
}
?>