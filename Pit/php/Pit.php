<?php
class Pit {
  private $siape;
  private $cod_periodo;
  private $cod_atividade;
  private $observacao;

  function __construct($siape, $periodo, $atividade, $observacao) {
    $this->siape = $siape;
    $this->cod_periodo = $periodo;
    $this->cod_atividade = $atividade;
    $this->observacao = $observacao;
  }

  function set_siape($siape) {
    $this->siape = $siape;
  }

  function get_siape() {
    return $siape;
  }

  function set_cod_periodo($periodo) {
    $this->cod_periodo = $periodo;
  }

  function get_cod_periodo() {
    return $this->cod_periodo;
  }

  function set_cod_atividade($atividade) {
    $this->cod_atividade = $atividade;
  }

  function get_cod_atividade() {
    return $this->cod_atividade;
  }

  function set_observacao($observacao) {
    $this->observacao = $observacao;
  }
}
?>
