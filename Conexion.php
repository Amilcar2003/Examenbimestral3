<?php
  class Conexion extends mysqli
  {
    public function __construct()
    {
      $servidor="localhost";
      $basedatos="basededatos1";
      $usuario="root";
      $contrase�a="";

      parent::__construct($servidor,$usuario,$contrase�a,$basedatos1);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos1;
      //echo $error;
      unset($error);
    }
  }
?>