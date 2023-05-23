<!---Starters----->
<div class="modal fade" id="addStarters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Starters</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Starters Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="starters_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="starters_category" readonly value="<?php echo "Starters"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Starters Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="starters_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Starters Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="starters_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishStarters" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Lunch----->
<div class="modal fade" id="addLunch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Lunch</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Lunch Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_category" readonly value="<?php echo "Lunch"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Lunch Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Lunch Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishLunch" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Dinner----->
<div class="modal fade" id="addDinner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dinner Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_category" readonly value="<?php echo "Dinner"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dinner Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dinner Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDinner" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Dessert----->
<div class="modal fade" id="addDessert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dessert</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dessert Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_category" readonly value="<?php echo "Dessert"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dessert Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dessert Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="dessert_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDessert" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Drinks----->
<div class="modal fade" id="addDrinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Drinks</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Drinks Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="drnks_category" readonly value="<?php echo "Drinks"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Drinks Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Drinks Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDrinks" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Wine----->
<div class="modal fade" id="addWine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Wine</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Wine Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="wine_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="wine_category" readonly value="<?php echo "Wine"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Wine Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="wine_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Wine Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="wine_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishWine" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>

<!---Specialties----->
<div class="modal fade" id="addSpecialties" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Starters</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

            <form amethod="POST" action="add_menu.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Specialties Code:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_code" >
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Category:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_category" readonly value="<?php echo "Specialties"; ?>">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Specialties Name:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_name">
					</div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Specialties Price:</label>
                    </div>

                    <div class="col-sm-10">
						<input type="text" class="form-control" name="specialties_price">
					</div>
                </div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishSpecialties" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
            </div>

            </form>
        </div>
    </div>
</div>