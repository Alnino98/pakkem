<?php require "base/navbar.php" ?>

<?php 

include 'config.php';
require 'mailer.php';


if (isset($_POST['submit'])) {

$query = "SELECT * FROM anggota ORDER BY id_pendaftar";


$hasil=mysqli_query($link,$query);

$emailku= $_POST["pilih"];
$email = $_POST["email"];


if ($emailku == 'emailku') {

while($row=mysqli_fetch_array($hasil)){
$subjek=$_POST["subjek"];
$pesan=$_POST["pesan"];
$emailku = $row["email"];

$ok =  send_email($emailku,$subjek,$pesan);

    if ($ok) {

        echo "<script>alert('Pengiriman sukses.');window.location.href = 'form.php';</script>";  
    }else{
    echo mysqli_error($link);
    }

    }
}
else {# code...
$subjek=$_POST["subjek"];
$pesan=$_POST["pesan"];

$ok =  send_email($email,$subjek,$pesan);

    if ($ok) {

        echo "<script>alert('Pengiriman ke Anggota sukses.');window.location.href = 'form.php';</script>";  
    }else{
    echo mysqli_error($link);
    }
    }
}
?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript'>
$(window).load(function(){
$("#pilih").change(function() {
            console.log($("#pilih option:selected").val());
            if ($("#pilih option:selected").val() == 'emailku') {
                $('#email').prop('hidden', 'true');
            } else {
                $('#email').prop('hidden', false);
            }
        });
});
</script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid contact">
    <div class="row">
        <div class="col-md-12" >
            <div class="contact-form">
        <form  method="POST" action="">

                <div class="form-group">
                  <h1 class="mb-4 text-gray-800">Email</h1>
                  <label class="control-label col-sm-2">Kirim ke</label>
                  <div class="col-sm-10">
                    <select class="selection-2 form-control" name="pilih" id="pilih">
                        <option value="emailku">Semua Anggota</option>
                        <option value="email">Anggota</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-10">          
                    <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" hidden>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2" for="subjek">Subjek</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subjek" placeholder="Subjek Email" name="subjek">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pesan">Pesan:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="editor"placeholder="...." name="pesan"></textarea>
                  </div>
                </div>
                <div class="form-group" >        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button name="submit" value="submit" name="submit" class="btn btn-primary float-right">Kirim</button>
                  </div>
                </div>
        </div>
    </div>
</div>   
</div>


    <script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
                    selector:'#editor',
                    menubar: true,
                    statusbar: true,
                    plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
                    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
                    skin: 'bootstrap',
                    toolbar_drawer: 'floating',
                    min_height: 220,           
                    autoresize_bottom_margin: 16,
                    setup: (editor) => {
                        editor.on('init', () => {
                            editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
                        });
                        editor.on('focus', () => {
                            editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
                            editor.getContainer().style.borderColor="#80bdff"
                        });
                        editor.on('blur', () => {
                            editor.getContainer().style.boxShadow="",
                            editor.getContainer().style.borderColor=""
                        });
                    }
                });
        </script>


<?php require "base/footer.php" ?>