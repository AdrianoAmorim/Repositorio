<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloIndex.css"/>
    <title>PIT - CADASTRO</title>
</head>
<body>

<header id="cabecalho">
    <img src="_imagens/img_logo.png" id="imgLogo"/>
    <h1 id="tituloPrincipal">PIT - PLANO INDIVIDUAL DE TRABALHO</h1>
</header>

<div id="conteudo">

    <aside id="asEsquerdo">
        <h3>SEMESTRES</h3>
    </aside>

    <section id="scCadastroPit">
        <div id="infoDocente">
            <h3>Professor: </h3>
        </div>

        <form name="frmCadastroPit" id="frmCadastroPit">
            <input type="text" name="inUsuario" id="usuario" placeholder="SIAPE" autofocus required></br>

            <input type="password" name="inSenha" id="senha" placeholder="PASSWORD" required></br>

            <input type="submit" id="btnEntrar" value="Entrar">
        </form>
    </section>
</div>

<footer id="rodape">
    <p>rodape</p>
</footer>

</body>
</html>