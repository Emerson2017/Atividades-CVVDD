<!DOCTYPE html>
<html>
    <head>
        <title>EXERCICIO PHP</title>
        <meta charset="UTF-8">

        <style type="text/css">
            html{
                height: 100%;
            }

            h1,h2,h3,h4,h5,h6{
                text-align: center;
            }

            section{
                height: 100%;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <div>
            <h1 class="title">EXERCÍCIO 01 DE PHP<h1>
        </div>

        <section>
            <?php 
                for($x = 1; $x <= 6; $x++){
                    echo "<h".$x.">Título com tamanho H".$x.".</h".$x.">\n";    
                }
            ?>
        </section>
    </body>
</html>