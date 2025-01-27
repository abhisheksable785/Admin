<?php
include "header.php";
?>
<?php
include "slider.php";
?>
<div class = "content-wrapper">
    <div class = "Container pt-2">
        <div class ="Card">
            <div class = "card-header">
            <div class="d-flex justify-content-between">
                <div>Category List</div>
                <div>
                    <a href="./category-add.php" class ="btn btn-primary">Add Category</a>
                </div>
            </div>
        </div>
        <div class ="card-body">
            <div class="table-responsive">
                <table class = "table text-center">
                    <tr>
                        <td>#</td>
                        <td>Category Name </td>
                        <td>status</td>
                        <td>Action</td>


                    </tr>
                    <?php
                    include "db_connection.php";
                    $query = "SELECT * FROM `tbl_category`";
                    $result = mysqli_query($conn , $query);
                    while($row = mysqli_fetch_array($result)){

                    
                    ?>
                    <tr>
                        <td><?php echo $row ["category_id"];?></td>
                        <td><?php echo $row ["category_name"];?></td>
                        <td><?php echo $row ["category_status"]== 1 ? '<div class="badge bg-success">Active</div> ': '<div class="badge bg-danger">InActive</div>';?>
                    </td>

                        <td>
                        <a href=""class="btn btn-success">
                        <i class ="fas fa-pen nav-icon"></i>
                        
                        </a>
                       

                        <a onclick ="if(confirm('Are you Sure ?')){}else{return false;}"href="category-delete.php?category_id=<?php echo $row ["category_id"]?>";class="btn btn-danger">
                        <a href=""class="btn btn-danger">
                        <i class ="fas fa-trash nav-icon"></i>
                        </a>
                    
                    
                        
                    </td>
                        
                    
                    </td>
                  




                    </tr>
                    <?php
                    
                    }
                    ?>
                </table>
            </div>
        </div>

        </div>
    </div>
   

</div>
<?php
include "footer.php";
?>