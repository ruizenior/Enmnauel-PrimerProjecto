<?php
require_once('fpdf/fpdf.php');
function Header(){
    $this -> cell(80);
    $this -> cell(30,25.'Listado de estudiantes',0,0,'c');
    $this -> ln(20);
    
    $this -> ln(20);
}

$nombres = array(
    array('nombreC' =>'Enmanuel Ruiz','matricula' => '2019-1026'),
    array('nombreC' =>'Pablo Ruiz','matricula' => '2019-1156'),
    array('nombreC' =>'Jessica Ruiz','matricula' => '2019-1026'),
    array('nombreC' =>'Carlos Ruiz','matricula' => '2019-1026'),
    array('nombreC' =>'Maria Ruiz','matricula' => '2019-1026'),
);

$fpdf = new FPDF();
$fpdf -> AddPage();
$fpdf -> SetFont('Arial','',16);
$fpdf -> Cell(30,5,'Salida de listato en PDF',0,1);
foreach ($nombres as $key => $value) {
    # code...
    $fpdf -> SetFont('Arial','',12);
    $fpdf -> Cell(80,10,$value['nombreC'],0,1);
}
$fpdf -> OutPut();
?>