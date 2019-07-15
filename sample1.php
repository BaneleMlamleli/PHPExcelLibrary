<?php
/*
 * This way of reading and writing to a file is not recommended even though it work.
 * The file is save to the specified director immediately. If no directory is specified
 * the file is saved into the directory of the executing code.
 * */
include_once('dbconnection.php');
require_once("vendor/autoload.php");
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
set_time_limit(0);
ini_set('memory_limit', '-1');
$excelRow = 1;
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$query = mysqli_query($con, "SELECT * FROM `user` ORDER BY `intUserID` ASC");
while($data = mysqli_fetch_object($query)){
    echo $data->intUserID.", ".$data->txtFirstname.", ".$data->txtLastname.", ".$data->txtIDNumber.", ".$data->txtDOB
        .", ".$data->txtGender.", ".$data->txtUserType.", ".$data->txtEmail.", ".$data->txtPassword.", ".$data->txtUserDateCreated
        .", ".$data->txtStatus.", ".$data->txtUserNote."<br>";
    $sheet->setCellValue('A'.$excelRow, $data->txtGender);
    $excelRow++;
}
echo "<hr>";
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');