<!DOCTYPE html>
<?php
include("./php/Conexao.php");
$con = new Conexao();
$con->conectar($_POST['inUsuario'],$_POST['inSenha']);
?>

<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloIndex.css"/>
    <script src="js/teste.js"></script>
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
            </optgroup>
            <optgroup label="2015">
                <option value="1º Semestre">1º Semestre</option>
                <option value="2º Semestre">2º Semestre</option>
            </optgroup>
        </select>

        <h2>CADASTRO - PIT</h2>
    </header>

    <section id="scCadastroPit">
        <form name="frmPit" id="frmPit" method="post">
            <fieldset class="camposDados" id="camposDados1"><legend class="tituloCamposDados">Informações do Professor</legend>
                <p id="nomeProf">Nome: Eros Moura</p>
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

            <fieldset class="camposDados"><legend class="tituloCamposDados">Atividades de Ensino</legend>
                <div id="componentesCurriculares">
                    <label for="componenteCurricular" id="lblCompCurr">Componente Curricular</label><br/>
                        <input type="text" name="componenteCurricular" class="inDados"><br/>
                        <input type="text" name="componenteCurricular" class="inDados">
                </div>

                <div id="coordenadoria">
                    <label for="coordenadoria" id="tituloCoordenadoria">Coordenadoria</label><br/>
                        <input type="text" name="coordenadoria" class="inDados"><br/>
                        <input type="text" name="coordenadoria" class="inDados">
                </div>

                <div id="numAulas">
                    <label for="qtdAulas" id="tituloNumAulas">Nº de Aulas</label><br/>
                        <input type="text" name="qtdAulas" class="inDados"><br/>
                        <input type="text" name="qtdAulas" class="inDados">
                </div>
                    <div class="clear"></div>
                <input type="button" onclick="" value="+" id="btnAddCampo" title="Adicionar Nova Atividade"></button>
            </fieldset>

            <fieldset class="camposDados"><legend class="tituloCamposDados">Atendimento ao Aluno</legend>

            </fieldset>

            <fieldset class="camposDados"><legend class="tituloCamposDados">Outras Ativdades no Ifes</legend>

            </fieldset>

            <textarea name="taObservacoes" cols="45" rows="5" maxlength="254" placeholder="Digite as Observações"  ></textarea>
        </form>
    </section>

</div>

<footer id="rodape">
    <p>rodape</p>
</footer>

</body>
</html>
