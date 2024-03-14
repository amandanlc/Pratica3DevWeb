<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $matriz = array();
        $sequencia = 1;
        for ($i = 0; $i < 2; $i++) { 
            for ($j = 0; $j < count($_POST) / 2; $j++) { 
                $matriz[$i][$j] = $_POST["num$sequencia"];
                $sequencia += 1;
            }
        }
    ?>

    <table>
        <?php
            $soma = 0;
            $valorColMeio = 0;
            $maiorValor = $matriz[1][0];
            $menorValor = $matriz[1][0];

            for ($i = 0; $i < count($matriz); $i++) { 
                echo "<tr>";
                for ($j = 0; $j < count($matriz[$i]); $j++) { 
                    $valor = $matriz[$i][$j];
                    if ($j == 1) {
                        $valorColMeio += $valor;
                    }
                    $soma += $valor;

                    //MAIOR E MENOR VALOR
                    if ($i == 1 && $matriz[1][$j] > $maiorValor) {
                        $maiorValor = $matriz[1][$j];
                    }else if ($i == 1 && $matriz[1][$j] < $menorValor) {
                        $menorValor = $matriz[1][$j];
                    }

                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }

            $media = $soma / 6;
            //adaptativo ao front-end:
            //$media = $soma / count(_POST);

            
            
        ?>
    </table>
    <?php
        echo "média dos números da matriz: $media <br>";
        echo "soma coluna do meio: $valorColMeio <br>";
        echo "o maior elemento da linha de indice 1 é: $maiorValor <br> 
              o menor elemento da linha de indice 1 é: $menorValor";
    ?>
</body>
</html>