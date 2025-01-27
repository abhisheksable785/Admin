<?php
header("Content-type: application/json");
include "../db/dbconnection.php";
    $query = "Select * from tbl_category";
    $result = mysqli_query($conn,$query);
    $categoryData = [];
    while($row = $result->fetch_assoc()){
        $categoryData[] = $row;
    } 
    echo json_encode([ "data"=>$categoryData ]);

?>