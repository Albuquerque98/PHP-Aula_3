<!DOCTYPE html>
<html>
    <body>

        <?php

            $a = 1;         //A variável $a é igual a 1
            $a += 2;        // Somamos 2 ao valor de $a 
            echo $a;
        ?>

        <?php

            $a -= 2;        //Subtraimos 2 do valor da variável $a
            $a *= 2;        //Multiplicamos o valor da váriavel $a por 2
            $a /= 2;        //Dividimos o valor da váriavel $a por 2         

        ?>    

        <?php

            $a = 1;
            echo ++$a;      //Incrementamos 1 e retornamos o valor
            echo $a++;      //Retornamos o valor e incrementamos 1
            echo --$a;      //Decrementamos 1 e retornamos o valor
            echo $a--;      //Retornamos o valor e decrementamos 1
    

        ?>

    </body>
</html>