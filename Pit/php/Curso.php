<?php
class Curso {
  private $cod_curso;
  private $nome_curso;
  private $cod_nivel_curso;
  private $cod_turno;

  function __construct() {
    // implementar depois
  }

  function set_cod_curso($cod) {
    $this->cod_curso = $cod;
  }

  function get_cod_curso() {
    return $this->cod_curso;
  }

  function set_nome_curso($nome) {
    $this->nome_curso = $nome;
  }

  function get_nome_curso() {
    return $this->nome_curso;
  }

  function set_cod_nivel_curso($nivel) {
    $this->cod_nivel_curso = $nivel;
  }

  function get_cod_nivel_curso() {
    return $this->cod_nivel_curso;
  }

  function set_cod_turno($turno) {
    $this->cod_turno = $turno;
  }

  function get_cod_turno() {
    return $this->cod_turno;
  }
}
?>
