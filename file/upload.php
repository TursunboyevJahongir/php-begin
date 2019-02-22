<?php

if($_FILES['picture']) {
    $picture = $_FILES['picture'];
    $upload_dir = 'uploads';
    $fileName = uniqid() . '_' . $picture['name'];

    if($picture['type'] ==  'image/jpg' || $picture['type'] == 'image/jpeg') {
        move_uploaded_file($picture['tmp_name'], $upload_dir.DIRECTORY_SEPARATOR.$fileName);
    }
    else {
        echo 'Fayl faqat jpeg, JPG rasm format bo`lishi kerak!';
    }
}
else {
    echo 'Fayl kelmadi';
}