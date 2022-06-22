<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        <center><h2>Cadastro de Clientes</h2></center>
        <hr/>
        <center><a href="index.php">Voltar</a></center>
        <br/><br/>
        <form action="cadastro.php" method="POST">
            Nome<br/>
            <input type="text" name="nome" required/><br/>
            Celular<br/>
            <input type="text" name="celular" required/><br/><br/>
            <input type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>