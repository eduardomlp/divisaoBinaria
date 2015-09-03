<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Divisão Binária</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <form id="formValores" method="POST" action="divisao.php">
            <br><br><br>
            <strong>Informe os valores em formato 8 bits:</strong><br><br><br>
            Dividendo:<br> 
            <input name="dividendo" id="dividendo"type="text" minlength="8" maxlength="8" required><br><br>
            Divisor:<br> 
            <input name="divisor" id="divisor" type="text" minlength="8" maxlength="8" required><br><br>
            <br>
            <input id="botaoSubmit" type="submit" value="Calcular">            
        </form>
    </body>
</html>
