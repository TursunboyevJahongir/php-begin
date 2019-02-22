<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 21.02.2019
 * Time: 20:39
 */

if (isset($_FILES)) {
    $soni = $_POST['TheNumberOf'];
    echo $soni;
    for ($i=0; $i < $soni; $i++) { 
        $fayllar = $_FILES['fayllar'.$i];
        
    foreach ($fayllar['error'] as $key => $fayl) {
        if ($fayl == 0) {
            $upload_dir = './uploads';
            if(isset($_POST['First_Name'.$i])) {
                @mkdir($upload_dir.DIRECTORY_SEPARATOR.$_POST['First_Name'.$i], 0777);
                $upload_dir = $upload_dir.DIRECTORY_SEPARATOR.$_POST['First_Name'.$i];
            
            }
            $fileName = uniqid() . '_' . $fayllar['name'][$key];
            $destination = $upload_dir.DIRECTORY_SEPARATOR.$fileName;
            
            move_uploaded_file($fayllar['tmp_name'][$key], $destination);

        }
    }
    }
}
else
    echo 'Fayl kelmadi!';