<?php 
session_start();

// starters
if(isset($_REQUEST['edit_menu'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->starters as $starters){

		if($starters->code == $_POST['starters_code']){
			$starters->name = $_POST['starters_name'];
			$starters->category = $_POST['starters_category'];
			$starters->price = $_POST['starters_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// lunch
if(isset($_REQUEST['edit_menu1'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->lunch as $lunch){

		if($lunch->code == $_POST['lunch_code']){
			$lunch->name = $_POST['lunch_name'];
			$lunch->category = $_POST['lunch_category'];
			$lunch->price = $_POST['lunch_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// dinner
if(isset($_REQUEST['edit_menu2'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->dinner as $dinner){

		if($dinner->code == $_POST['dinner_code']){
			$dinner->name = $_POST['dinner_name'];
			$dinner->category = $_POST['dinner_category'];
			$dinner->price = $_POST['dinner_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// dessert
if(isset($_REQUEST['edit_menu3'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->dessert as $dessert){

		if($dessert->code == $_POST['dessert_code']){
			$dessert->name = $_POST['dessert_name'];
			$dessert->category = $_POST['dessert_category'];
			$dessert->price = $_POST['dessert_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// drinks
if(isset($_REQUEST['edit_menu4'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->drinks as $drinks){

		if($drinks->code == $_POST['drinks_code']){
			$drinks->name = $_POST['drinks_name'];
			$drinks->category = $_POST['drinks_category'];
			$drinks->price = $_POST['drinks_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// wine
if(isset($_REQUEST['edit_menu5'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->wine as $wine){

		if($wine->code == $_POST['wine_code']){
			$wine->name = $_POST['wine_name'];
			$wine->category = $_POST['wine_category'];
			$wine->price = $_POST['wine_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}

// specialties
if(isset($_REQUEST['edit_menu6'])){
    $menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	foreach($menu->specialties as $specialties){

		if($specialties->code == $_POST['specialties_code']){
			$specialties->name = $_POST['specialties_name'];
			$specialties->category = $_POST['specialties_category'];
			$specialties->price = $_POST['specialties_price'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml', $menu->asXML());
	$_SESSION['message'] = "menu Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select menu to edit first";
	header("location: index.php");
}
?>