<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/programas.controlador.php";
require_once "controladores/sedes.controlador.php";

require_once "modelos/fichas.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/programas.modelo.php";
require_once "controladores/sedes.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();