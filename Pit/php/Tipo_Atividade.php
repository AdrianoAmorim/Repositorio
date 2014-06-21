<?php
class Tipo_Atividade {
  private $cod_tipo_atividade;
  private $desc_tipo_atividade;

  function __construct() {
    // implementar depois
  }

  function set_cod_tipo_atividade($cod) {
    $this->cod_tipo_atividade = $cod;
  }

  function get_cod_tipo_atividade() {
    return $this->cod_tipo_atividade;
  }

  function set_desc_tipo_atividade($desc) {
    $this->desc_tipo_atividade = $desc;
  }

  function get_desc_tipo_atiivdade() {
    return $this->desc_tipo_atiivdade;
  }
}
?>
