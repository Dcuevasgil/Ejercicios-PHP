<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicios Arrays</h2>

        <!--  Ejercicio 1: 
          Dado el array = [3,7,11,8,1,4]

        1) Mostrar por pantalla el valor de cada elemento multiplicado por vuestra edad. 
        La edad debe pedirla por un formulario. -->

    <form action="" method="post">
        <input type="number" id="edad" name="edad" placeholder="Ingrese su edad" required>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        
        $edad = $_POST["edad"];
        
        $valoresArray = array(3, 7, 11, 8, 1, 4);
        
        foreach ($valoresArray as $valor) {
            $resultado = $valor * $edad;
            echo "<p>$valor * $edad = $resultado</p>";
        };

        // 2) Modificar el valor de cada elemento del array por el resto de dividir cada elemento entre 2.

        foreach ($valoresArray as $valor) {
            $resultado = $valor % 2;
            echo "<p>$resultado</p>";
        };

        // Dado el string = "Jurado, Alberto, Marcelo, Pablo, Maria"
        // 1) Definir un array en cuya posición esté cada nombre del string anterior.

        $array1 = ["Jurado, Alberto, Marcelo, Pablo, Maria"];

        $string1 =  "Jurado, Alberto, Marcelo, Pablo, Maria";
        $array1 = explode(", ", $string1);
        print_r($array1);
        

        // 2) Dado el array anterior, mostrar por pantalla en que posición se encuentra la letra a en cada elemento del array.

        foreach ($array1 as $nombre) {
            $posicion = strpos($nombre, 'a');
            if($posicion !== false) {
                echo "<br>La letra 'a' se encuentra en la posición $posicion en el elemento '$nombre'<br>";
            } else {
                echo "La letra 'a' no se encuentra en el elemento '$nombre'<br>";
            };
        };

        // 3) Dado el array anterior, cambiar en cada elemento del array anterior la letra a por la e.

        foreach ($array1 as $cambio) {
            $cambio = str_replace('A', 'E', $cambio);
            $cambio = str_replace('a', 'e', $cambio);
        };
        print_r($array1);

        // 4) Crear una función que dado un array devuelva el array al revés 
        // (la posición 0 ahora tendrá el valor de la última posición y viceversa). 
        // Crearla como función normal y como función flecha.

        // Funcion normal
        function revertirArray($array1) {
            return array_reverse($array1);
        };
        print_r(revertirArray($array1));

        $array1 = ["Jurado, Alberto, Marcelo, Pablo, Maria"];
        $array1 = array_reverse($array1);
        print_r($array1);

        // Funcion flecha
        $reversedArray = function($array1) {
            return array_reverse($array1);
        };

        $reverseArray = function($array) {
            return array_reverse($array);
        };
        echo "<br></br>";
        echo "Original: ";
        print_r($array1);
        echo "<br></br>";
        echo "Array inverso: ";
        print_r($reverseArray($array1));

        // 5) Dado el array de nombres, poner cada nombre en mayúsculas y al revés

        foreach ($array1 as $nombre) {
            $nombre = strtoupper(strrev($nombre));
        }
        print_r($array1);

        // 1)Crea un array de números de 100 posiciones, que contendrá los números del 1 al 100. 
        // Partiendo del array ya creado y completamente relleno, obtener la suma de todos ellos y la media.

        $array1 = range(1, 100);
        $suma = array_sum($array1);
        $media = $suma / count($array1);

        // 2)Crear un array de enteros donde indicamos por teclado el tamaño del array, 
        // rellenamos el array con números aleatorios entre 0 y 9, y mostramos por pantalla 
        // el valor de cada posición y la suma de todos los valores.

        $tamaño = (int) readline("Introduce el tamaño del array: ");
        $array1 = [];
        for ($i = 0; $i < $tamaño; $i++) {
            $array1[] = array_rand($array1);
        };

        echo "<br>Valores del array:</br>";
        foreach ($array1 as $valor) {
            echo "Posicion:  $i - Valor: $valor <br>";
        };

        $suma = array_sum($array1);

        //3)Pedir por formulario  un numero entero y crear un array de ese tamaño, con valores aleatorios entre 1 y 300. A continuación, pedir un número entero entre 0 y 9, e imprimir todas las posiciones del array que tengan un número acabado en ese dígito. Esos números, además de imprimirlos, almacenarlos en un array de salida con el tamaño adecuado.

        if(isset($_POST['tamaño'])) {
            $tamaño = (int) $_POST['tamaño'];
        } else {
            ?>
            <form action="" method="post">
                <input type="number" id="tamaño" name="tamaño" placeholder="Introduce el tamaño del array" required>
                <button type="submit">Enviar</button>
            </form>
            <?php 
            exit;
        }

            $arraySalida = [];
            foreach ($array1 as $valor) {
                if($valor % 10 === $digito) {
                    echo "Posicion: $valor</br>";
                    $arraySalida[] = $valor;
                };
            };

                echo "Array de salida:</br>";
                print_r($arraySalida);


                // 4)Introduce por un formulario el número de tu DNI, y vuelve a imprimirlo seguido de la letra. 
                // Para calcular la letra, cogeremos el resto de dividir nuestro dni entre 23, el resultado debe 
                // estar entre 0 y 22. Tendrás que crear un array que contenga

                if (isset($_POST['dni'])) {
                    $dni = (int) $_POST['dni'];
                } else {
                    ?>
                    <form action="" method="post">
                        <input type="number" id="dni" name="dni" required>
                        <button type="submit">Enviar</button>
                    </form>
                    <?php
                    exit;
                }
                
                $letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 
                'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
                $letra = $letras[$dni % 23];
                echo "Tu DNI es: $dni$letra";

                
                // 1) Define una función que reciba un número n y devuelva si es primo o no
                function esPrimo($n) {
                    if ($n <= 1) {
                        return false;
                    };
                    for ($i=2; $i < sqrt($n); $i++) { 
                        if ($n % $i == 0) {
                            return false;
                        };
                    };
                    return true;
                }

                if(esPrimo($n)) {
                    echo "$n es un numero primo";
                } else {
                    echo "$n no es un numero primo";
                };
                

                // 2) Dado el array [5,1,7,8,2,4,6,3,9], comprueba si hay algún número primo
                $array = [5,1,7,8,2,4,6,3,9];
                $primo = false;

                for ($i = 0; $i < count($array); $i++) {
                    
                };
                
                // 3) Dado el array [5,1,7,8,2,4,6,3,9], comprueba si todos son números primos

                $array = [5,1,7,8,2,4,6,3,9];
                function todosPrimos($array) {
                    if($array <= 1) {
                        return false;
                    }

                    for ($i=0; $i < sqrt($array); $i++) { 
                        if ($array % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                // 4) Dado el array [5,1,7,8,2,4,6,3,9], comprueba en que posición está el primer número primo
                $array = [5, 1, 7, 8, 2, 4, 6, 3, 9];

                $firstPrimeIndex = null;
                foreach ($array as $index => $num) {
                    if (esPrimo($num)) {
                        $firstPrimeIndex = $index;
                        break;
                    }
                }

                if ($firstPrimeIndex !== null) {
                    echo "The first prime number is at index $firstPrimeIndex.";
                } else {
                    echo "There are no prime numbers in the array.";
                }

                //5) Dado el array [5,1,7,8,2,4,6,3,9], comprueba cual es el primer número primo
                $firstPrimeIndex = null;
                foreach ($array as $index => $num) {
                    if (esPrimo($num)) {
                        $firstPrimeIndex = $index;
                        break;
                    }
                }

                if ($firstPrimeIndex !== null) {
                    echo "The first prime number is at index $firstPrimeIndex.";
                } else {
                    echo "There are no prime numbers in the array.";
                }

                // 6) Dado el array [5,1,7,8,2,4,6,3,9], quédate sólo con los números primos
                $numerosPrimos = array_filter($array, 'esPrimo');

                echo "Prime numbers in the array: ";
                foreach ($numerosPrimos as $primo) {
                    echo "$primo ";
                }

                // 7)  Dado el array de números primos, dame el producto de todos los elementos del array
                $numerosPrimos = array_filter($array, 'isPrime');

                $producto = 1;
                foreach ($numerosPrimos as $primo) {
                    $producto *= $primo;
                }

                echo "Product of prime numbers: $producto";

                // 8)  Define una función que reciba un String y devuelva si es palíndromo o no
                function esPalindromo($str) {
                    $str = strtolower($str); 
                    $str = str_replace(' ', '', $str);
                    $str = str_replace('.', '', $str);
                    $str = str_replace(',', '', $str); 
                    $reversedStr = strrev($str); 
                    if ($str == $reversedStr) {
                        return "Sí, es un palíndromo.";
                    } else {
                        return "No, no es un palíndromo.";
                    }
                }
                
                $string = "David"; 
                echo esPalindromo($string);

                // 9) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba si hay algún palíndromo
                $arrayCosas = ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"];

                $palindromos = [];
                foreach ($arrayCosas as $str) {
                    if (esPalindromo($str)) {
                        $palindromos[] = $str;
                    }
                }

                if (!empty($palindromos)) {
                    echo "Palíndromos encontrados: ";
                    foreach ($palindromos as $palindromo) {
                        echo "$palindromo ";
                    }
                } else {
                    echo "No se encontraron palíndromos.";
                }
                // 10) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba si todos son palíndromos
                $allPalindromes = true;
                foreach ($arrayCosas as $str) {
                    if (!esPalindromo($str)) {
                        $allPalindromes = false;
                        break;
                    }
                }

                if ($allPalindromes) {
                    echo "Todos los elementos en el array son palíndromos.";
                } else {
                    echo "No todos los elementos en el array son palíndromos.";
                }
                // 11) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba en que posición está el primer palíndromo

                $firstPalindromeIndex = null;
                foreach ($arrayCosas as $index => $str) {
                    if (esPalindromo($str)) {
                        $firstPalindromeIndex = $index;
                        break;
                    }
                }

                if ($firstPalindromeIndex !== null) {
                    echo "El primer palíndromo está en la posición $firstPalindromeIndex.";
                } else {
                    echo "No se encontró ningún palíndromo en el array.";
                }

                // 12) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba cual es el primer palíndromo
                $firstPalindrome = null;
                foreach ($arrayCosas as $str) {
                    if (esPalindromo($str)) {
                        $firstPalindrome = $str;
                        break;
                    }
                }

                echo "El primer palíndromo es: $firstPalindrome";
                // 13) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], quédate sólo con los palíndromos
                $palindromos = [];
                foreach ($arrayCosas as $str) {
                    if (esPalindromo($str)) {
                        $palindromos[] = $str;
                    }
                }

                echo "Palíndromos: ";
                foreach ($palindromos as $palindromo) {
                    echo "$palindromo ";
                }
                // 14)  Dado el array de números palíndromos, dame la concatenación de todos los elementos del array
                $palindromos = [];
                foreach ($arrayCosas as $str) {
                    if (esPalindromo($str)) {
                        $palindromos[] = $str;
                    }
                }

                $concatenacion = "";
                foreach ($palindromos as $palindromo) {
                    $concatenacion .= $palindromo;
                }

                echo "Concatenación de palíndromos: $concatenacion";

                // Otros:
                // 1) Dado un array de números, verifica si hay algún número negativo
                $arrayNumeros = [1, 2, -3, 4, 5];

                $hayNegativo = false;
                foreach ($arrayNumeros as $num) {
                    if ($num < 0) {
                        $hayNegativo = true;
                        break;
                    }
                }

                if ($hayNegativo) {
                    echo "Hay un número negativo en el array.";
                } else {
                    echo "No hay números negativos en el array.";
                }

                // 2) Dado un array de Strings, encuentra el índice del primer String que empiece por la letra 'A'
                $arrayPalabras = ["hola", "adiós", "mundo", "amigo"];

                $indice = null;
                foreach ($arrayPalabras as $index => $str) {
                    if (strpos($str, "A") === 0 || strpos($str, "a") === 0) {
                        $indice = $index;
                        break;
                    }
                }

                if ($indice !== null) {
                    echo "El índice del primer String que empieza por 'A' es: $indice";
                } else {
                    echo "No hay Strings que empiecen por 'A' en el array.";
                }
                // 3) Dado un array de números de 3 o más cifras, calcula la suma de las últimas cifras de cada número
                $arrayNumeros1 = [123, 456, 789, 101];

                $suma = 0;
                foreach ($arrayNumeros1 as $num) {
                    $suma += $num % 10;
                }

                echo "La suma de las últimas cifras de cada número es: $suma";
                // 4) Dado un array de arrays, filtra el array para que sólo queden los arrays de longitud 5
                $arrayFiltrado = [[1, 2, 3], [4, 5, 6, 7, 8], [9, 10], [11, 12, 13, 14, 15]];

                $arrayFiltrado = [];
                foreach ($arrayFiltrado as $subArray) {
                    if (count($subArray) == 5) {
                        $arrayFiltrado[] = $subArray;
                    }
                }

                echo "Array filtrado: ";
                print_r($arrayFiltrado);
                // 5) Dado un array de Strings, encuentra el primer string de longitud 3
                $arrayPalabras1 = ["hola", "adiós", "mundo", "amigo", "no"];

                $primerString = null;
                foreach ($arrayPalabras1 as $str) {
                    if (strlen($str) == 3) {
                        $primerString = $str;
                        break;
                    }
                }

                if ($primerString !== null) {
                    echo "El primer string de longitud 3 es: $primerString";
                } else {
                    echo "No hay strings de longitud 3 en el array.";
                }
                // 6) Dado un array de números, verifica que todos los números sean de 2 cifras o más
                $arrayNumerosAleatorios = [1, 23, 456, 7, 89];

                $sonDosCifras = true;
                foreach ($arrayNumerosAleatorios as $num) {
                    if (strlen((string)$num) < 2) {
                        $sonDosCifras = false;
                        break;
                    }
                }

                if ($sonDosCifras) {
                    echo "Todos los números son de 2 cifras o más.";
                } else {
                    echo "No todos los números son de 2 cifras o más.";
                }

                
            ?>
</body>
</html>