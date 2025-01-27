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
                <div>Add Category</div>
                <div>
                    <a href="./category-list.php" class ="btn btn-primary">List Category</a>
                </div>
            </div>
        </div>
        <div class ="card-body">
            <form action="category-insert.php" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Category Name <span class ="text-danger">*</span></label>
                        <input type="text" class ="form-control " name=" category_name">
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="Submit" value ="Save " class = "btn btn-success">
                        <input type="Reset" value ="Reset " class = "btn btn-danger">

                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class = "table text-center">
                    <tr>
                        <td>#</td>
                        <td>Category Name </td>
                        <td>Action</td>

                    </tr>
                </table>
            </div>
        </div>

        </div>
    </div>
   

</div>
<?php
include "footer.php";
?>