

<?php
    function SeculoAno(int $ano):int{
        $resultado = $ano / 100.0;
        return ceil($resultado);
    }
?>


