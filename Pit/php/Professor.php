<?php
class Professor {
  private $siape;
  private $nome_professor;
  private $cod_coordenadoria;
  private $cod_formacao;
  private $sexo;

  function __construct() {
    // implementar depois
  }

  function set_siape($siape) {
    $this->siape = $siape;
  }

  function get_siape() {
    return $this->siape;
  }

  function set_nome_professor($nome) {
    $this->nome_professor = $nome;
  }

  function get_nome_professor() {
    return $this->nome_professor;
  }

  function set_cod_coordenadoria($coordenadoria) {
    $this->cod_coordenadoria = $coordenadoria;
  }

  function get_cod_coordenadoria() {
    return $this->cod_coordenadoria;
  }

  function set_cod_formacao($formacao) {
    $this->cod_formacao = $formacao;
  }

  function get_cod_formacao() {
    return $this->cod_formacao;
  }

  function set_sexo($sexo) {
    $this->sexo = $sexo;
  }

  function get_sexo() { //piadinha por acaso
    return $this->sexo;
  }
}
?>
