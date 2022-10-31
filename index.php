<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Rifa </title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="rifa.php" method="post">
            <p>
                Item da Rifa:  <input type="text" name="item"  />
            </p>
            <p>
                Data do Evento: <input type="date" name="data" />
            </p>
            
            <p>
               Quantidade de Números: <input type="number" name="num" />
            </p>
            
            <p>
                Valor R$: <input type="number" name="valor" />
            </p>
            
            <p>
                <input type="submit" value="Gerar" />
            </p>
        </form>
    </body>
</html>