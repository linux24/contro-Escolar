<?php

include "imprime/fpdf.php";


class mipdf extends FPDF
{
	
	public function header()
	{

		$this->Image("../img/logomenu.png",10,10,20);
		$this->SetFont('ARIAL','B',20);
		$this->Cell(80);
		$this->Cell(100,10,"creado por luis",0,0,'c');
		$this->load_html($html1);
	}
}

$mipdf=new mipdf();

$mipdf->addPage();
$mipdf->Output();


?>


