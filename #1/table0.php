<?php
function table1($n,$m){

    echo "<table class='table'>";


        for($i=0;$i<$n;$i++){
            echo "<tr>";
            for($j=0;$j<$m;$j++){
                echo "<td>";
                echo rand(10,99);
                echo "</td>";
            }
            echo "</tr>";
        }






    echo "</table>";


}

table1(10,10);
?>