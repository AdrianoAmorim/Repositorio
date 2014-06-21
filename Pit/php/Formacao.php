<?php
class Formacao {
  private $cod_formacao;
  private $desc_formacao;

  function __construct() {
    // implementar depois
  }

  function set_cod_formacao($cod) {
    $this->cod_formacao = $cod;
  }

  function get_cod_formacao() {
    return $this->cod_formacao;
  }

  function set_desc_formacao($desc) {
    $this->desc_formacao = $desc;
  }

  function get_desc_formacao() {
    return $this->desc_formacao;
  }
}
?>
