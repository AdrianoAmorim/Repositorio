<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloLogin.css">
    <title>Pagina Principal - PIT</title>
</head>

<body>

<header id="cabecalho">
    <img src="_imagens/img_logo.png" id="imgLogo"/>
    <h1 id="tituloPrincipal">PIT - PLANO INDIVIDUAL DE TRABALHO</h1>
</header>

        <form name="frmLogin" id="frmLogin" method="post"action="index.php">
            <h2> LOGIN </h2>

            <input type="text" name="inUsuario" id="usuario" class="camposInput" placeholder="SIAPE" autofocus required></br>

            <input type="password" name="inSenha" id="senha" class="camposInput" placeholder="PASSWORD" required></br>

            <input type="submit" id="btnEntrar" value="Entrar">
        </form>

</body>
</html>
