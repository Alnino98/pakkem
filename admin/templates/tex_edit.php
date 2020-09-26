<?php require "base/navbar.php"; ?>

<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="../js/editor.js"></script>
        <script>
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="../css/editor.css" type="text/css" rel="stylesheet"/>
        <title>Halaman Text Edit</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h3 class="demo-text">Text Edit Admin</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 nopadding">
                            <textarea id="txtEditor"></textarea> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
