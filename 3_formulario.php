<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
        <form action=""method='post'>
            <label for="nome">Nome</label>
            <input type="text" name="nome" required> <br>

            <label for="email">Email:</label>
            <input type="email" name="email" required> <br>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required> <br>

<!--Botao de envio -->
<button type="Submit">Enviar</button>
        </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome =$_POST['nome'];
        $email =$_POST['email'];
        $telefone =$_POST['telefone'];

        echo "<h2> Dados recebidos:</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
    }

    ?>
    </body>
    </html>