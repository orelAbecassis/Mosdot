<?php
require('mysql_table.php');


class PDF extends PDF_MySQL_Table
{
function Header()
{
    // Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'LISTE DES DONS',0,1,'C');
    $this->Ln(10);
    // Ensure table header is printed
    parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','mosdot');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'SELECT participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.estRegle from participant INNER JOIN don on participant.Id_part = don.Id_part; ');
// $pdf->AddPage();
// Second table: specify 3 columns
// $pdf->AddCol('Nom',20,'','Nom');
// $pdf->AddCol('Prenom',40,'Prenom');
// $pdf->AddCol('pop',40,'Pop (2001)','R');
// $prop = array('HeaderColor'=>array(255,150,100),
//             'color1'=>array(210,245,255),
//             'color2'=>array(255,255,210),
//             'padding'=>2);
// $pdf->Table($link,'select name, format(pop,0) as pop, rank from country order by rank limit 0,10',$prop);
$pdf->Output();
?>