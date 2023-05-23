<?php 

session_start();
$code = $_REQUEST['code'];

$menu = simplexml_load_file("files/Hizole_IT2C_finalproject_KainNa.xml");

//create an iterator
$index = 0;
$i = 0;


foreach($menu->dinner as $dinner){

//remove if the ID matches
	if($dinner->code = $code){
		$index = $i;
		break;
	}
	$i++;
}

unset($menu->dinner[$index]);
file_put_contents('files/Hizole_IT2C_finalproject_KainNa.xml',$menu->asXML());

$_SESSION['message'] = 'Menu Successfully Deleted';
header("location:index.php");


?>