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

<div id="container">
    <header id="cabecalhoPit">
        <label for="selectSemestres" id="lblSelect">Escolha do PIT:</label>
        <select name="semestres" id="selectSemestres">
            <option value=""></option>
            <optgroup label="2014">
                <option value="1º Semestre">1º Semestre</option>
                <option value="2º Semestre">2º Semestre</option>
                <option value="3º Semestre">3º Semestre</option>
                <option value="4º Semestre">4º Semestre</option>
            </optgroup>
        </select>

        <h2>CADASTRO - PIT</h2>
    </header>

    <section id="scCadastroPit" class="camposDados">
        <fieldset class="camposDados"><legend class="tituloCamposDados">Informações do Professor</legend>
            <h3 id="nomeProf">Nome: Eros Moura</h3>
            <p id="numSiape">SIAPE: 01245</p>

            <div class="clear"></div>

            <fieldset id="regimeTrabalho"><legend class="tituloCamposDados">Regime de Trabalho</legend>
                <label for="20" class="lblRadios">20H</label>
                <input type="radio" name="horasTrab" id="20" class="radios" required>

                <label for="40" class="lblRadios">40H</label>
                <input type="radio" name="horasTrab" id="40" class="radios" required>

                <label for="DE" class="lblRadios">DE</label>
                <input type="radio" name="horasTrab" id="DE" class="radios" required>
            </fieldset>

        </fieldset>



    </section>



</div>

<footer id="rodape">
    <p>rodape</p>
</footer>

</body>
</html>