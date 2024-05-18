<?php
require_once 'modelo/datospersonas.php';

$DatosPersonas = new DatosPersonas();

$DatosPersonas->Nombre = 'Barbara';
$DatosPersonas->Apellido = 'Torri';
$DatosPersonas->Email = 'example@gmail.com';
$DatosPersonas->Edad = '23';

$DatosPersonas->MostrarDatos();