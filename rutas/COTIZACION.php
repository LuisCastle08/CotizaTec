<?php
/*OBTENEMOS LOS DATOS QUE SE ENVIARON DEL FORMULARIO */
$Nombres = $_POST['nombres'];
$Cantidad = $_POST['cantidades'];
$Precios = $_POST['precios'];
$Totales = $_POST['totales'];

/* REGRESAMOS A TIPO ARRAYS LOS INPUTS */
$arrayNombres = explode(",",$Nombres);
$arrayCantidad = explode(",",$Cantidad);
$arrayPrecio = explode(",",$Precios);
$arrayTotales = explode(",",$Totales); 

/* OBTENEMOS LA LONGITUD PARA ESTABLECES EL RANGO DEL FOR */
 $longitud = sizeof($arrayNombres);

require('../php/fpdf.php');

class pdf extends FPDF
{
	public function header()
	{
        $titulo = $_POST['cabeza'];
        /* COLOR */
        $color = $_POST['color'];
        
        switch ($color) {
            case 1:
                $red=255; $green=127; $blue=0;
                $rutaimg = "../img/electricidad.png";
            break;
            case 2:
                $red=0; $green=97; $blue=255;
                $rutaimg = "../img/tubo.png";
            break;
            case 3:
                $red=79; $green=79; $blue=79;
                $rutaimg = "../img/folder.png";
            break;
            default:
                $red=0; $green=0; $blue=0;  
                $rutaimg = "../img/engranaje.png";
            break;
        }

		$this->SetFillColor($red, $green,$blue);
		$this->Rect(0,0, 220, 30, 'F');
        $this->SetY(13);
        $this->SetX(90);
        $this->SetFont('Arial', 'B',20);
        $this->SetTextColor(255,255,255);
        $this->Write(5,utf8_decode($titulo));
        $this->SetY(10);
        $this->SetX(10);
        $this->Image($rutaimg,13,2,25,25,'');
	}

	public function footer()
	{
        $color = $_POST['color'];
        $red=0;$green=0;$blue=0;
        switch ($color) {
            case 1:
                $red=255; $green=127; $blue=0;
            break;
            case 2:
                $red=0; $green=97; $blue=255;
            break;
            case 3:
                $red=79; $green=79; $blue=79;
            break;
            default:
                $red=0; $green=0; $blue=0;  
            break;
        }

		$this->SetFillColor($red, $green,$blue);
		$this->Rect(0, 263, 220, 23, 'F');
        $this->SetY(-10);
        $this->SetFont('Arial','B',20);
        $this->SetTextColor(255,255,255);
        $this->SetX(30);
        $this->Write(5,'Jose Luis Castillo');
        /* 
        $this->SetX(80);
        $this->Write(5, 'Josech781@gmail.com');
         */
        $this->SetX(130);
        $this->Write(5,'99-34-25-38-47');
	}
}

$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
/* $fpdf->SetLeftMargin(23); */
$fpdf->SetY(40);
$fpdf->SetFont('Courier','B',14);
$fpdf->Write(25,"Reporte de Costos");
$fpdf->Ln();
$fpdf->Cell(75,8,"Nombre Producto",1,0,'C',0);
$fpdf->Cell(28,8,"Cantidad",1,0,'C',0);
$fpdf->Cell(50,8,"Precio",1,0,'C',0);
$fpdf->Cell(40,8,"Total",1,1,'C',0);

$fpdf->SetFont('Arial','',12);

$totalG=0;
for ($i=0; $i < $longitud ; $i++) { 
    $fpdf->Cell(75,8,utf8_decode($arrayNombres[$i]),1,0,'C',0);
    $fpdf->Cell(28,8,$arrayCantidad[$i],1,0,'C',0);
    $fpdf->Cell(50,8,$arrayPrecio[$i],1,0,'C',0);
    $fpdf->Cell(40,8,$arrayTotales[$i],1,1,'C',0);
    $totalG += $arrayTotales[$i];
}
$fpdf->Ln();
$fpdf->SetFont('TIMES','B',14);
$fpdf->Cell(50,8,"GENERAL TOTAL",0,0,'C',0);
$fpdf->Cell(28,8,"",0,0,'C',0);
$fpdf->Cell(50,8,"",0,0,'C',0);
$fpdf->Cell(40,8,"$".$totalG,0,1,'C',0);

$fpdf->OutPut('I', 'COTIZACION.pdf', 'utf8_decode');