<?php require("php/metodos.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Pasos</title>
</head>
<body>
    <?php echo "Hola mundo" ?>
    <?= "Hola mundo"?>

    <?php
        #Funciones
        function holaMundo() {
            echo "Hola Mundo ";
        }

        holaMundo();

        function getVar($var) {
            if (isset($_GET[$var])) {
                $res = $_GET[$var];
            } else {
                $res = 0;
            }
            return $res;
        }

        $parametro = getVar("param");

        echo $parametro." ";

        function getVarDefault($var, $def = 0) {
            if (isset($_GET[$var])) {
                $res = $_GET[$var];
            } else {
                $res = $def;
            }
            return $res;
        }

        $parametro = getVarDefault("param");

        echo $parametro." ";

        $parametro = getVarDefault("param", 4);

        echo $parametro." ";
    ?>

    <?php
        #Arrays
        $arrayEjemplo = array("ejemplo1", "ejemplo2");
        for ($i = 0; $i < count($arrayEjemplo); $i++) {
            echo $arrayEjemplo[$i]." ";
        }

        echo "// ";

        foreach ($arrayEjemplo as $e) {
            echo $e." ";
        }

        $profes = ["MariFer", "Jorge", "Ramon", "Joaquin"];
    ?>

    <ul>
        <?php foreach($profes as $i):?>
            <li><?= $i; ?></li>
        <?php endforeach ?>
    </ul>

    <?php
        #Arrays asociativos o diccionarios
        $engEsp = array(
            "Hello" => "Hola",
            "World" => "Mundo"
        );
        
        foreach ($engEsp as $eng => $esp) {
            echo "English: ".$eng.", Español: "."$esp"."//";
        }

        $map = ["Hello" => "Hola"];

        #Arrays multidimensionales
        $matriz = [[1,2,3], [4,5,6], [7,8,9]];
    ?>

    <table style="border-collapse: collapse; ">
        <?php for($i = 0; $i <count($matriz); $i++):?>
            <tr>
                <?php for($j = 0; $j <count($matriz[$i]); $j++):?>
                    <td style="border: solid 1px black;"><?= $matriz[$i][$j];?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

    <!-- Funciones predefinidas -->
    <h3>Funciones predefinidas:</h3>
    <ul>
        <li><?= date("d-m-Y"); ?></li>
        <li><?= time(); ?></li>
        <li><?= "Raiz Cuadrada de 9: ".sqrt(9); ?></li>
        <li><?= "Aleatorio entre 5 y 20: ".rand(5, 20); ?></li>
        <li><?= "Pi: ".pi(); ?></li>
        <li><?= "Redondear: ".round(7.893435); ?></li>
        <li><?= "Redondear con dos decimales: ".round(7.893435, 2); ?></li>
        <li><?= "Tipo variable: ".gettype(3.4); ?></li>
        <li><?= "Es un string?: ".is_string("Hola"); ?></li>
        <li><?= "Es un float?: ".is_float(2.3); ?></li>
        <li><?= "Existe?: ".isset($numero); ?></li>
        <?php
            #Eliminar variable
            unset($numero);
        ?>
        <li><?= "Variable eliminada?: ".(!$numero); ?></li>
        <li><?= "Quitar espacios delante y detras: ".trim("      a          "); ?></li>
        <li><?= "Esta vacia?: ".empty(""); ?></li>
        <li><?= "Longitud cadena: ".strlen("cadena"); ?></li>
        <li><?= "Posicion de subcadena en cadena: ".strpos("cadena", "de"); ?></li>
        <li><?= "Reemplazar maravilla por mierda: ".str_replace("maravilla", "mierda", "La lluvia en Sevilla es pura maravilla"); ?></li>
        <li><?= "Mayus: ".strtoupper("mayusculas"); ?></li>
        <li><?= "Minus: ".strtolower("MINUSCULAS"); ?></li>
        <li>
            <?php
                #Ordenar elementos de array
                sort($profes);
                echo "Ordenar arrays: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Añadir elemento a array
                array_push($profes, "profeNuevo");
                echo "Añadir elemento a array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Borrar ultimo elemento del array
                array_pop($profes);
                echo "Borrar ultimo elemento del array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li>
            <?php
                #Borrar un elemento del array
                unset($profes[0]);
                echo "Borrar un elemento del array: ";
                foreach ($profes as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li><?= "Indice aleatorio: ".(array_rand($profes)) ?></li>
        <li>
            <?php
                #Array invertido
                echo "Array invertido: ";
                foreach (array_reverse($profes) as $p) {
                    echo $p." ";
                }
            ?>
        </li>
        <li><?= "Buscar en array: ".(array_search("Jorge", $profes)) ?></li>
        <li><?= "Tamaño del array: ".(sizeof($profes)) ?></li>
    </ul>

    <?php imprimirArray($profes)?>

    <?php include_once("php/main.php")?>
</body>
</html>