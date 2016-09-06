<?php

/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/09/2016
 * Time: 04:19 PM
 */
class fpdfController extends \App\Controller
{
    protected $_fpdf;

    public function __construct()
    {
        parent::__construct();
        ob_end_clean(); 
        $this->getLibrary('fpdf');

        $this->_fpdf = new FPDF();
    }

    public function index()
    {
    }

    public function generarPdf()
    {
        $this->_fpdf->AddPage();
        $this->_fpdf->SetFont('Arial','B',16);
        $this->_fpdf->Cell(40,10,'dsddds');
        $this->_fpdf->Output();
    }
}