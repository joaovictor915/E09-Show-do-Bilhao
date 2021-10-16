
<?php
    /*Inclusões*/
    //header('Location: '. 'perguntas.php?id=1');

    include "Menu.inc";
    include "rodape.inc";
    include "perguntas.inc";

?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão - Perguntas</title>
    </head>

    <?php 
        $id = $_GET["id"];
        $id = $id - 1;
        
        if($id == -1){ //Se o ID é igual a -1, significa que é o primeiro acesso, então o jogador deve ser
                       //direcionado para o menu
            echo("Clique no link para ser direcionado ao menu: ");
            echo(getmenu());

        }else{ //se o id é valido ele segue para a lógica padrão do jogo
            echo(getMenu());



            
            echo(getPergunta($id));

            echo("<br>");

            //COOKIES
            /*echo("Pontuacao: ");
            echo($_COOKIE['Pontuacao']);
            echo("<br>");
            echo("Ultimo Log-in: ");
            echo($_COOKIE['Ultimo-login']);
            echo("<br>");
            */
            $acertos = $id;



            echo('<br>');
            echo("Número de acertos: $acertos/5");
            echo("<br>");

            echo("Ultima pontuacao: ");
            if($_COOKIE['ultima-pontuacao']){
                echo($_COOKIE['ultima-pontuacao']);
            }
            echo("<br>");
            echo("Ultimo acesso: ");
            echo($_COOKIE['ultimo-login']);



            echo('<br>');
            echo('Usuário: ');
            echo('<b>');
            echo($_SESSION['nome']);
            echo('</b>');
            //echo(mostraquestoes());
            //echo(mostragabarito());
        }

        echo(getRodape());



    ?>

</html>