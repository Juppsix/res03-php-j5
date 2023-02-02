<?php 
 require './calculator.phtml';

 $nb1 = $POST['nb1']; // Je déclare mes variables
 $op = $POST['calculator']; // Je déclare mes variables
 $nb2 = $POST['nb2']; // Je déclare mes variables
 $result = $POST['result'];
  if(isset($_POST['calculator'])) // Je selectionne calculator
  {
      if ($op==="Multiplication") { // Je selectionne Multiplication
          echo $nb1*$nb2;
      }
      else if ($op==="Addition") { // Je selectionne Addition
          echo $nb1+$nb2;
      }
      else if ($op==="Division") { // Je selectionne Division
          echo $nb1/$nb2;
      }
      else if ($op==="Soustraction") { // Je selectionne Soustraction 
          echo $nb1-$nb2;
      }
      else if($op==="Modulo") { // Je selectionne Modulo
          echo $nb1%$nb2;
      }
  
  }
?>