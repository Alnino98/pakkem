<?php
    require '../models/config.php';
    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];
    $email = $_GET['email'];

    $back_dir    ="../../admin/templates/files/";
    $file = $back_dir.$_GET['filename'];
     
        if (file_exists($file)) {

            date_default_timezone_set("Asia/Bangkok");
            $date = date("Y-m-d h:i:sa");
            $log = 'Download '.$email.' '.$ip.' '.$date."\r\n";
            file_put_contents('../log.txt', $log, FILE_APPEND);


            $db_log = "UPDATE log SET kegiatan = 1, timestamp = CURRENT_TIMESTAMP WHERE email = '$email'";
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
            header("location:agenda_kegiatan.php");
        }
    }
?>