<?php

//Conditional operation

//if, elseif, switchcase

//if else (jo and To )


if(isset($_POST['submit'])){
	//$file_info = $_FILES['choosefile'];

	if(	$_FILES['choosefile']['size'] <=  20000){
		move_uploaded_file(	$_FILES['choosefile']['tmp_name'],	'images/'.$_FILES['choosefile']['name']	);
	}
	else{
		echo "You are not allowed to upload more than 20KB file size!";
	}
	
}

if($_FILES['choosefile']['size'] <= 20000){
	
	move_uploaded_file();
}
else{
	echo "Wrong not allowed";
}
	



if(2 == 10){
echo "this is right";
}
else{
	echo "this is wrong";
}	

?>