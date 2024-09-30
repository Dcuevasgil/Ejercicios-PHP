<?php 

    function imprimirArray($array) {
        if (is_array($array)) {
            foreach($array as $e) {
                echo $e." ";
            }
        }
    }

?>