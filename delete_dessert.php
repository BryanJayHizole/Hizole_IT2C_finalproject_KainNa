<?php 

session_start();
$code = $_REQUEST['code'];

$menu = simplexml_load_file("files/Hizole_IT2C_finalproject_KainNa.xml");

//create an iterator
$index = 0;
$i = 0;


foreach($menu->dessert as $dessert){

//remove if the ID matches
	if($dessert->code = $code){
		$index = $i;
		break;
	}
	$i++;
}

unset($menu->dessert[$index]);
file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml',$menu->asXML());

$_SESSION['message'] = 'Menu Successfully Deleted';
header("location:index.php");


?>