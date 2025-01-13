<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum CDM - Good Life</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Sua conta foi criada Parabéns.</h1>
    </header>
    <main>
        <?php
        $nome = $_POST["nome"] ?? "Eu sei quem é você!";
        $senha = $_POST["senha"] ?? "Não olhe para trás agora! Talvez foi uma ameaça.";
        echo "<p> Estas são as informações da sua conta";
        echo "<p> <strong>Login: $nome</strong> <p>";
        echo "<p> <strong>Senha: $senha</strong> <p>";
        ?>
        </header>
        <section>
            <label for="text">Caso desejar fazer alterações clicke abaixo</label>
            <input type="submit" value="Error 404">
            <a href="javascript:history.go(-1)">👉 Caso precisar de ajuda clique aqui 👈</a>


            </form>
        </section>

    </main>


</body>

</html>