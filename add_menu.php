<?php 
session_start();

//  Starterts

//check if the button is clicked
if(isset($_REQUEST['publishStarters'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$starters = $menu->addChild('starters');

	$starters->addChild('code', $_REQUEST['starters_code']);
	$starters->addChild('category', $_REQUEST['starters_category']);
	$starters->addChild('name', $_REQUEST['starters_name']);
	$starters->addChild('price', $_REQUEST['starters_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Lunch

//check if the button is clicked
if(isset($_REQUEST['publishLunch'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$lunch = $menu->addChild('starters');

	$lunch->addChild('code', $_REQUEST['lunch_code']);
	$lunch->addChild('category', $_REQUEST['lunch_category']);
	$lunch->addChild('name', $_REQUEST['lunch_name']);
	$lunch->addChild('price', $_REQUEST['lunch_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Dinner

//check if the button is clicked
if(isset($_REQUEST['publishDinner'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$dinner = $menu->addChild('starters');

	$dinner->addChild('code', $_REQUEST['dinner_code']);
	$dinner->addChild('category', $_REQUEST['dinner_category']);
	$dinner->addChild('name', $_REQUEST['dinner_name']);
	$dinner->addChild('price', $_REQUEST['dinner_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Dessert

//check if the button is clicked
if(isset($_REQUEST['publishDessert'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$dessert = $menu->addChild('starters');

	$dessert->addChild('code', $_REQUEST['dessert_code']);
	$dessertr->addChild('category', $_REQUEST['dessert_category']);
	$dessert->addChild('name', $_REQUEST['dessert_name']);
	$dessert->addChild('price', $_REQUEST['dessert_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Drinks

//check if the button is clicked
if(isset($_REQUEST['publishDrinks'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$drinks = $menu->addChild('starters');

	$drinks->addChild('code', $_REQUEST['drinks_code']);
	$drinks->addChild('category', $_REQUEST['drinks_category']);
	$drinks->addChild('name', $_REQUEST['drinks_name']);
	$drinks->addChild('price', $_REQUEST['drinks_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Wine

//check if the button is clicked
if(isset($_REQUEST['publishWine'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$wine = $menu->addChild('starters');

	$wine->addChild('code', $_REQUEST['wine_code']);
	$wine->addChild('category', $_REQUEST['wine_category']);
	$wine->addChild('name', $_REQUEST['wine_name']);
	$wine->addChild('price', $_REQUEST['wine_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

//  Specialties

//check if the button is clicked
if(isset($_REQUEST['publishSpecialties'])){

	//open xml file
	$menu = simplexml_load_file('files/Hizole_IT2C_finalproject_KainNa.xml');

	//prepare all the tags and data
	$specialties = $menu->addChild('starters');

	$specialties->addChild('code', $_REQUEST['specialties_code']);
	$specialties->addChild('category', $_REQUEST['specialties_category']);
	$specialties->addChild('name', $_REQUEST['specialties_name']);
	$specialties->addChild('price', $_REQUEST['specialties_price']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($menu->asXML());
	$dom->save('files/Hizole_IT2C_finalproject_KainNa.xml');

	//send a message to index
	$_SESSION['message'] = "Menu Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}
?>