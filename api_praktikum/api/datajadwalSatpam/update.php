<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../../config/databasejadwalSatpam.php';
    include_once '../../models/employeesjadwalSatpam.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Employee($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    
    // employee values
    $item->nama = $data->nama;
    $item->umur = $data->umur;
    $item->shift = $data->shift;
    $item->waktumasuk =  $data->waktumasuk;
    $item->waktupulang =  $data->waktupulang;
    
    if($item->updateEmployee()){
        echo json_encode(['messsagae'=>'Employee updated successfully.']);
    } else{
        echo json_encode(['messsage'=>'Employee could not be updated.']);
    }
?>