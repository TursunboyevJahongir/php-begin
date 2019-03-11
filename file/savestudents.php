<?php

if (isset($_FILES)) { 
    $fayllar = $_FILES['fayllar'];
    foreach ($fayllar['error'] as $key => $fayl) {
        if ($fayl == 0) {
            $upload_dir = 'uploads';
            $student_name = $_POST['name'][$key];
            if(!empty($student_name)) {
                $fileName = $student_name.'_'.$fayllar['name'][$key];
                $upload_dir = $upload_dir.DIRECTORY_SEPARATOR.$fileName;
                move_uploaded_file($fayllar['tmp_name'][$key], $upload_dir);
            }
        }
    }
}
else
    echo 'Fayl kelmadi!';