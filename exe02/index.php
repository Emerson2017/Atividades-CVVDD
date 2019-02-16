<!DOCTYPE html>
<html>
    <head>
        <title>EXERCICIO PHP</title>
        <meta charset="UTF-8">

        <style>
            .title, table tr td{
                text-align:center;
            }

            section{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            table{
                width: 40%;
            }
        </style>
    </head>

    <body>
        <div>
            <h1 class="title">EXERCÍCIO 02 DE PHP<h1>
        </div>

        <section>

            <?php 
                $pratoDoDia = [
                    ["Entrada", "Principal", "Sobremesa"],
                    ["Cachorro quente", "Lasanha", "Sorvete"]
                ];
            ?>
            <h1>Cardápio do dia: </h1>
            <table border="1"> 
                <tr>
                    <?php 
                        for($x = 0; $x< sizeof($pratoDoDia[0]); $x++){
                            echo "<th>".$pratoDoDia[0][$x]."</th>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($y = 0; $y < count($pratoDoDia[1]); $y++){
                            echo "<td>".$pratoDoDia[1][$y]."</td>";
                        }
                    ?>   
                </tr>
            </table>
        </section>
    </body>
</html>