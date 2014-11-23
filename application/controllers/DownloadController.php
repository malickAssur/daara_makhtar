<?php

class DownloadController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       /* $classeur = new PHPExcel;
$classeur->getProperties()->setCreator("Annie Gagnon");
$classeur->setActiveSheetIndex(0);
$feuille=$classeur->getActiveSheet();
// ajout des données dans la feuille de calcul
$feuille->setTitle('Nom affiché dans l\'onglet');
$feuille->setCellValueByColumnAndRow(0, 1, 'Les colonnes débutent à 0 et les lignes débutent à 1');
$feuille->SetCellValue('A2', 'Il est aussi possible d\'utiliser la notation LettreChiffre (ex : A2)');
// envoi du fichier au navigateur
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="nomfichier.xlsx"'); 
header('Cache-Control: max-age=0'); 
$writer = PHPExcel_IOFactory::createWriter($classeur, 'Excel2007'); 
$writer->save('php://output');*/
    }


}

