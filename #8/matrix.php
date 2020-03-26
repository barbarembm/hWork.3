<?php

function arrayF($m,$n,$a,$b){
     
    $stack = array();
   
        for($i=1;$i<$m;$i++){
            
            // print_r($stack);
            echo "  ";
            echo "<br>";
            echo $stack[] = rand($a,$b);
          
                for($j=1;$j<$n;$j++){
            
            echo " ";
                echo $stack[] =  rand($a,$b);
            }
        } 
}


echo $_POST['m'];
echo $_POST['n'];
echo $_POST['a'];
echo $_POST['b'];

?>