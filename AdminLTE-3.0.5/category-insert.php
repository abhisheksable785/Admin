<?php
include "db_connection.php";

$category_name = $_POST["category_name"];
$query = "INSERT INTO `tbl_category`(`category_name`)VALUES('$category_name')";
$result = mysqli_query($conn, $query);

if($result){
    echo "<script>alert('Data Insert Succesfully');</script> ";
    echo "<script>window.location.href = 'category-list.php'</script>";

}
else{
    echo "Something Went Wrong !";
}

?>