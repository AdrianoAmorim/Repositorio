<?php
class Nivel_Curso {
  private $cod_nivel_curso;
  private $desc_nivel_curso;

  function __construct() {
    // implementar depois
  }

  function set_cod_nivel_curso($cod) {
    $this->cod_nivel_curso = $cod;
  }

  function get_cod_nivel_curso() {
    return $this->cod_nivel_curso;
  }

  function set_desc_nivel_curso($desc) {
    $this->desc_nivel_curso = $desc;
  }

  function get_desc_nivel_curso() {
    return $this->desc_nivel_curso;
  }
}
?>
