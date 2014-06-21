<?php
class Atividade {
  private $cod_atividade;
  private $desc_atividade;
  private $cod_tipo_atividade;
  private $ch_atividade;
  private $cod_curso;
  private $cod_coordenadoria;

  function __construct() {
    // implementar depois
  }

  function set_cod_atividade($cod) {
    $this->cod_atividade = $cod;
  }

  function get_cod_atividade() {
    return $this->cod_atividade;
  }

  function set_desc_atividade($desc) {
    $this->desc_atividade = $desc;
  }

  function get_desc_atividade() {
    return $this->desc_atividade;
  }

  function set_cod_tipo_atividade($tipo) {
    $this->cod_tipo_atividade = $tipo;
  }

  function get_cod_tipo_atividade() {
    return $this->cod_tipo_atividade;
  }

  function set_ch_atividade($ch) {
    $this->ch_atividade = $ch;
  }

  function get_ch_atividade() {
    return $this->ch_atividade;
  }

  function set_cod_curso($curso) {
    $this->cod_curso = $curso;
  }

  function get_cod_curso() {
    return $this->cod_curso;
  }

  function set_cod_coordenadoria($coordenadoria) {
    $this->cod_coordenadoria = $coordenadoria;
  }

  function get_cod_coordenadoria() {
    return $this->cod_coordenadoria;
  }
}
?>
  



}
?>
