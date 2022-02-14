<?php
require("fpdf/fpdf.php");
$db = new PDO('mysql:host=localhost;dbname=soireeTest','root','');
class myPDF extends fpdf{
    function header(){
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Liste des Dons',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '. $this->PageNo().'/{nb}',0,0,'C');
       
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(50,10,'Nom',1,0,'C');
        $this->Cell(40,10,'Prenom',1,0,'C');
        $this->Cell(45,10,'Libelle',1,0,'C');
        $this->Cell(10,10,utf8_decode('$'),1,0,'C');
        $this->Cell(40,10,'Statut',1,0,'C');
        $this->Cell(30,10,'Type de Don',1,0,'C');
        // $this->Cell()
        // $this->Cell()
        // $this->Cell()
        $this->Ln();

    }
    function viewTable($db)
    {
        $this->SetFont('Times','',12);
        $stmt = $db->query('SELECT participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.estRegle  from participant INNER JOIN don on participant.Id_part = don.Id_part ORDER BY participant.Nom ASC');
        
        while($data = $stmt->fetch(PDO::FETCH_OBJ))
        {
            
            $this->Cell(50,10,utf8_decode($data->Nom),1,0,'C');
            $this->Cell(40,10,utf8_decode($data->Prenom),1,0,'L');
            $this->Cell(45 ,10,utf8_decode($data->Libelle),1,0,'L');
            $this->Cell(10,10,utf8_decode($data->Montant),1,0,'L');
            $this->Cell(40,10,utf8_decode($data->estRegle),1,0,'L');
            $this->Cell(30,10,utf8_decode($data->typeDon),1,0,'L');
            $this->Ln();
        }

    }

   }

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output('test4.pdf','I');





?>