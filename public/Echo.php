<?php

/**
 *
 */
class Christmas
{
  function echoChristmas()

  {
    for($i=0;$i<3;$i=$i+1){
      for($j=5;$j>=$i;$j=$j-1){
        echo "&nbsp;";
      }
      for($k=0;$k<$i*2+1;$k=$k+1){
        echo "*";
      }
      echo "<br>";
    }

    for($i=0;$i<5;$i=$i+1){
      for($j=5;$j>=$i;$j=$j-1){
        echo "&nbsp;";
      }
      for($k=0;$k<$i*2+1;$k=$k+1){
        echo "*";
      }
      echo "<br>";
    }
  for($i=0;$i<6;$i=$i+1){
    for($j=5;$j>=$i;$j=$j-1){
      echo "&nbsp;";
    }
    for($k=0;$k<$i*2+1;$k=$k+1){
      echo "*";
    }
    echo "<br>";
  }
  for($i=0;$i<4;$i=$i+1){
    for ($j=0; $j < 5; $j++) {
      echo "&nbsp;";
    }
    for ($k=0; $k < 3; $k++) {
      echo "*";
    }
    echo "<br>";
  }
}
}

$y = new Christmas();
$y->echoChristmas();

?>
