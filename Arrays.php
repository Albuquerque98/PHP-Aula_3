<!DOCTYPE html>
<html>
    <body>

        <?php
            //Array com Chave => Valor
            $listaAlunoIdade = array(
                "Leonardo" => 31,
                "Gabriela" => 27,
                "Bianca" => 7
            );

            //Array apenas com Valor
            $listaCores = array(
                "Vermelho",
                "Amarelo",
                "Verde",
                "Laranja"
            );

            //Acesso ao item do array $listaAlunoIdade[CHAVE]
            echo $listaAlunoIdade["Leonardo"];

            echo "<br />";

            echo $listaCores[2];

            echo "<br />";

            var_dump($listaCores);


        ?>
        
    </body>
</html>