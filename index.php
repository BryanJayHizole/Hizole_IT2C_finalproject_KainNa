
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Menu Management</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
</html>
<body>
    <div class="container">
        <h1 class="page-header text-center"> Menu Management</h1>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
            
            <a href="#addStarters" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Starters</a>

            <a href="KainNa/home.php" class="btn btn-light" target="_blank"> View Website</a>  \

            <!---Starters-->
            
            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->starters as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---Lunch-->
            <a href="#addLunch" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Lunch</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->lunch as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---Dinner-->

            <a href="#addDinner" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Dinner</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->dinner as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---Desert-->
            <a href="#addDesert" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Desert</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->desert as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---Drinks-->
            <a href="#addDrinks" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Drinks</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->drinks as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---wine-->

            <a href="#addWine" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Wine</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->wine as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>

            <!---Specialties-->
            <a href="#addSpecialties" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Specialties</a>

            <?php 

            if(isset($_SESSION['message'])){

            
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;">
                <?php echo $_SESSION['message'] ?>
            </div>
            
            <?php 
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                <?php 

                    $file = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

                    foreach($file->specialties as $rows) {
                    ?>

                        <tr>
                            <td><?php echo $rows->code; ?></td>
                            <td><?php echo $rows->category; ?></td>
                            <td><?php echo $rows->name; ?></td>
                            <td><?php echo $rows->price; ?></td>

                            <td>
                                <a href="#edit_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                <a href="#delete_<?php echo $rows->code; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>
                
                <tfoot>
                    <th scope="col">Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tfoot>

            </table>
        </div>
    </div>
</body>