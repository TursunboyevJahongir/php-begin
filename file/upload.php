<?php

if($_FILES['picture']) {
    $picture = $_FILES['picture'];
    $upload_dir = 'uploads';
    $fileName = uniqid() . '_' . $picture['name'];
    //Validate type file
    
    else  if($picture['type'] ==  'content-type:image/jpg' {
        move_uploaded_file($picture['tmp_name'], $upload_dir.DIRECTORY_SEPARATOR.$fileName);
    }
    else {
        echo 'Fayl faqat jpeg, JPG rasm format bo`lishi kerak!';
    }
}
else {
    echo 'Fayl kelmadi';
}