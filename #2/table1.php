<?php

function tanTable($row,$column,$a,$b){
    echo "<table class='tab'>";
        for($r=0; $r<$row; $r++){
            echo "<tr>";
                for($c=0; $c<$column; $c++ ){
                    
                    echo "<td>";
                    echo rand($a, $b);
                    echo "</td>";
                }

            echo "</tr>";
        }
    echo "</table>";
    

}



?>