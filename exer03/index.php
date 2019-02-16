<!DOCTYPE html>
<html>
    <head>
        <title>EXERCICIO PHP</title>
        <meta charset="UTF-8">

        <style type="text/css">
            html{
                height: 100%;
            }
            body{
                height: 40%;
            }

            h1{
                text-align: center;
            }

            section{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100%;
            }

            form{
                height: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            form label{
                margin: 3px;
            }
            
        </style>
    </head>

    <body>
        <div>
            <h1 class="title">EXERCÍCIO 03 DE PHP<h1>
        </div>
        <section>
            <form action="verifica.php" method="POST">
                <label>Nome: <input type="text" name="nome" required></label><br>
                <label>Endereço: <input type="text" name="endereco" required></label><br>
                <label>Idade:  <input type="number" name="idade" required></label><br>
                <label>Sexo: <input type="radio" name="sexo" value="masculino"> MASCULINO <input type="radio" name="sexo" value="feminino"> FEMININO</label>   
                <input type="submit">
            </form>
        </section>
    </body>
</html>