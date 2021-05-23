<?php
require_once('fpdf/fpdf.php');
class PDF extends FPDF{
    function Header(){
        $this->SetFont('Arial','B',20);
        $this->cell(53);
        $this->cell(30,10,'Listado de estudiantes',0,0,'c');
        $this->ln(20);
        
        $this->SetFont('Arial','B',12);
        $this->cell(60,10,'Nombre',1,0,'C',0);
        $this->cell(60,10,'Apellido',1,0,'C',0);
        $this->cell(60,10,'matricula',1,1,'C',0);
    }
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
    }
}

$nombres = array(
    array('nombreC' =>'Enmanuel','apellido' => 'Ruiz','matricula' => '2019-0890'),
    array('nombreC' =>'Pablo','apellido' => 'Perez','matricula' => '2019-1156'),
    array('nombreC' =>'Jessica','apellido' => 'Ramirez','matricula' => '2019-5506'),
    array('nombreC' =>'Carlos','apellido' => 'Quezada','matricula' => '2019-5464'),
    array('nombreC' =>'Maria','apellido' => 'Ruiz','matricula' => '2019-5555'),
);

$fpdf = new PDF();
$fpdf -> AliasNbPages();
$fpdf -> AddPage();
$fpdf -> SetFont('Arial','',10);
// $fpdf -> Cell(30,5,'Salida de listato en PDF',0,1);

foreach ($nombres as $key => $value) {
    # code...
    $fpdf->SetFont('Arial','',12);
    $fpdf->Cell(60,10,utf8_decode($value['nombreC']),1,0,'C',0);
    $fpdf->Cell(60,10,utf8_decode($value['apellido']),1,0,'C',0);
    $fpdf->Cell(60,10,utf8_decode($value['matricula']),1,1,'C',0);
}

$fpdf -> OutPut();

?>