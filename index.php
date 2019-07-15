<?php
include_once('dbconnection.php');
require_once("vendor/autoload.php");
// load phpspreadsheet class using namespace
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// call IOFactory instead of using the xlsx writer or reader
use PhpOffice\PhpSpreadsheet\IOFactory;
set_time_limit(0);
ini_set('memory_limit', '-1');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="usermoduleUsers.xlsx"');

$excelRow = 1;
// creating a new spreadsheet object
$spreadsheet = new Spreadsheet();
// getting the current active sheet in the excel document
$sheet = $spreadsheet->getActiveSheet();
$query = mysqli_query($con, "SELECT * FROM `user` ORDER BY `intUserID` ASC");
while($data = mysqli_fetch_object($query)){
    $sheet->setCellValue('A'.$excelRow, $data->intUserID);
    $sheet->setCellValue('B'.$excelRow, $data->txtFirstname);
    $sheet->setCellValue('C'.$excelRow, $data->txtLastname);
    $sheet->setCellValue('D'.$excelRow, $data->txtIDNumber);
    $sheet->setCellValue('E'.$excelRow, $data->txtDOB);
    $sheet->setCellValue('F'.$excelRow, $data->txtGender);
    $sheet->setCellValue('G'.$excelRow, $data->txtUserType);
    $sheet->setCellValue('H'.$excelRow, $data->txtEmail);
    $sheet->setCellValue('I'.$excelRow, $data->txtPassword);
    $sheet->setCellValue('J'.$excelRow, $data->txtUserDateCreated);
    $sheet->setCellValue('K'.$excelRow, $data->txtStatus);
    $sheet->setCellValue('L'.$excelRow, $data->txtUserNote);
    $excelRow++;
}

// creating the IOFactory object
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//save into php output
$writer->save('php://output');

while($data = mysqli_fetch_object($query)){
    echo $data->intUserID.", ".$data->txtFirstname.", ".$data->txtLastname.", ".$data->txtIDNumber.", ".$data->txtDOB
        .", ".$data->txtGender.", ".$data->txtUserType.", ".$data->txtEmail.", ".$data->txtPassword.", ".$data->txtUserDateCreated
        .", ".$data->txtStatus.", ".$data->txtUserNote."<br>";
    $excelRow++;
}