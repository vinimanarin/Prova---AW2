<?php
        $n = $_GET['num'];
        if($n < 0) {
            echo  $n . ' O número informado é negativo' . '<br>';
        }
        else
            echo $n . ' O número informado é positivo' . '<br>';
        }
        $p = $n / 2;
        if($p = 0) {
            echo $n . ' O número informado é par' . '<br>';
        }
        else {
            echo $n . ' O número informado é ímpar' . '<br>';
        }
?>
