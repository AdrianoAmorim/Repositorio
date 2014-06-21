<?php
class Periodo {
  private $cod_periodo;
  private $desc_periodo;
  private $data_inicial;
  private $data_final;

  function __construct() {
    // implementar depois
  }

  function set_cod_periodo($cod) {
    $this->cod_periodo = $cod;
  }

  function get_cod_periodo() {
    return $this->cod_periodo;
  }

  function set_desc_periodo($desc) {
    $this->desc_periodo = $desc;
  }

  function get_desc_periodo() {
    return $this->desc_periodo;
  }

  function set_data_inicial($dt_ini) {
    $this->data_inicial = $dt_ini;
  }

  function get_data_inicial() {
    return $this->data_inicial;
  }

  function set_data_final($dt_fim) {
    $this->data_final = $dt_fim;
  }

  function get_data_final() { 
    return $this->data_final;
  }
}
?>
