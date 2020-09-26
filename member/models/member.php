<?php
    $link = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_daftar");
	$link_admin = mysqli_connect("localhost", "pakkem", "Covid*20", "pakkem_pakkem");
	
    function jumlah($pilih){
    	switch ($pilih) {
    		case '1':
    			global $link_admin;
    			$agenda = "SELECT * FROM agenda_kegiatan";
				$sql = mysqli_query($link_admin,$agenda);
				$jumlah = mysqli_num_rows($sql);
				return  $jumlah;
    			break;
    		case '2':
    			global $link_admin;
    			$modul = "SELECT * FROM modul";
				$sql = mysqli_query($link_admin,$modul);
				$jumlah = mysqli_num_rows($sql);
				return  $jumlah;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    function agenda_diikuti($pilih){
    	switch ($pilih) {
    		case '1':
    			
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
?>