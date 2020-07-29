<?php
  class Conexion extends mysqli
  {
    public function __construct()
    {
      $servidor="localhost";
      $basedatos="basededatos1";
      $usuario="root";
      $contraseña="";

      parent::__construct($servidor,$usuario,$contraseña,$basedatos1);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos1;
      //echo $error;
      unset($error);
    }
  }
?>