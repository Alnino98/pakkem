<?php
    require '../models/config.php';

    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];
    $email = $_GET['email'];

    $back_dir    ="../../admin/templates/files_modul/";
    $file = $back_dir.$_GET['filename'];
     
        if (file_exists($file)) {
            $db_log = "INSERT INTO log VALUES(NULL, '$email', 'Download modul', CURRENT_TIMESTAMP)";
            $record = mysqli_query($link, $db_log);
            
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
            header("location:modul.php");
        }
    }
?>