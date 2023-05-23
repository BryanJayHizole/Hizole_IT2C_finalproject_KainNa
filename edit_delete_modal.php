<!-- Edit -->
<!-- Starters -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Starters Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="starters_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="starters_category" value="<?php echo "Starters"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Starters Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="starters_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Starters Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="starters_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Lunch -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_category" value="<?php echo "Lunch"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu1" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Dinner -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_category" value="<?php echo "Dinner"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu2" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Dessert -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dessert Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_category" value="<?php echo "Dessert"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dessert Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dessert Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu3" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Drinks -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_category" value="<?php echo "Drinks"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">drinks Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu4" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Wine -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_category" value="<?php echo "Wine"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu5" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Specialties -->

<div class="modal fade" id="edit_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_menu.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Specialties Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_code" value="<?php echo $rows->code; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_category" value="<?php echo "Specialties"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Specialties Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Specialties Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_menu6" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update menu</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<!-- Starters -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_starters.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Lunch -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_lunch.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Dinner -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_dinner.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Dessert -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_dessert.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Drinks -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_drinks.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Wine -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_wine.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Specialties -->
<div class="modal fade" id="delete_<?php echo $rows->code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete menu:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_specialties.php?id=<?php echo $rows->code; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>