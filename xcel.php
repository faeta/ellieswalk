<?php

$SO_ID=$_POST['so'];
$Status=$_POST['status'];

require_once 'Classes/PHPExcel.php';

$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setCellValue('A1', $SO_ID);
$objPHPExcel->getActiveSheet()->setCellValue('B1', $Status);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save("/var/www/html/apps/asheet.xlsx");