<?php
    include "../crud.php";

    foreach($_FILES as $file){
        $_FILES['Filedata'] = $file;
    }
		
    $tempFile = $_FILES['Filedata']['tmp_name'];
    $filename = $_FILES['Filedata']['name'];
    $name = rand(10,1000).'.jpg';
    $newname = '../../images/'.$name;
    $copied = copy($tempFile, $newname);
    if(!$copied){
        echo 'Invalid file.';
        exit();
    }//endif copied
	    
    $tblFields = array('path');
    $tblFieldsValues = array($name);

    $obj = new Database;
    $obj->connect();
    $row =  $obj->insert("post_images","path","'$name'");
    echo($row);