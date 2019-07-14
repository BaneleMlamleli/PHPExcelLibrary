<?php
echo "index.php";
//include_once('dbconnection.php');
require_once("PHPExcel/Classes/PHPExcel.php");
set_time_limit(0);
ini_set('memory_limit', '-1');
// creating an object of the PHPExcel class
$excel = new PHPExcel();
//$excel->setActiveSheetIndex(0);
//$excelRow = 1;
//$query = mysqli_query($con, "SELECT * FROM user");
//while($data = mysqli_fetch_object($query)){
//    $excel->getActiveSheet()
//        ->setCellValue('A'.$excelRow, $data->intUserID)
//        ->setCellValue('A'.$excelRow, $data->txtFirstname)
//        ->setCellValue('A'.$excelRow, $data->txtLastname)
//        ->setCellValue('A'.$excelRow, $data->txtIDNumber)
//        ->setCellValue('A'.$excelRow, $data->txtDOB)
//        ->setCellValue('A'.$excelRow, $data->txtGender)
//        ->setCellValue('A'.$excelRow, $data->txtUserType)
//        ->setCellValue('A'.$excelRow, $data->txtEmail)
//        ->setCellValue('A'.$excelRow, $data->txtPassword)
//        ->setCellValue('A'.$excelRow, $data->txtUserDateCreated)
//        ->setCellValue('A'.$excelRow, $data->txtStatus)
//        ->setCellValue('A'.$excelRow, $data->txtUserNote);
//    echo $data->intUserID. ", " .$data->txtFirstname. ", " .$data->txtLastname. ", " .$data->txtIDNumber. ", " .$data->txtDOB
//        .", ".$data->txtGender.", ".$data->txtGender.", ".$data->txtUserType.", ".$data->txtEmail.", ".$data->txtEmail.", ".$data->txtPassword
//        .", ".$data->txtUserDateCreated.", ".$data->txtStatus.", ".$data->txtUserNote."<br>";
//    $excelRow++;
//}

$objPHPExcel = PHPExcel_IOFactory::load("/home/shaun/Documents/programming/php/Projects/PHPExcelLibrary/test_file/users.xlsx");
var_dump($objPHPExcel);
echo "end of file";