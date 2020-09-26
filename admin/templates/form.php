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

		echo "<script>alert('Pengiriman ke anggota sukses.');window.location.href = 'form.php';</script>";  
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<div class="container-fluid contact">
	<div class="row">
		<div class="col-md-9" >
			<div class="contact-form">
		<form  method="POST" action="">

				<div class="form-group">
				  <h1 class="h3 mb-4 text-gray-800">Email</h1>
				  <div class="col-sm-10">
					<select class="selection-2" name="pilih" id="pilih">
						<option value="emailku">semua anggota</option>
						<option value="email">anggota</option>
					</select>
 					</div>
 				</div>

				<div class="form-group">
				  <div class="col-sm-10">          
					<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" hidden>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="subjek">Subjek</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="subjek" placeholder="subjek Email" name="subjek">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="pesan">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="pesan"placeholder="masukan pesan" name="pesan"></textarea>
				  </div>
				</div>
				<div class="form-group" >        
				  <div class="col-sm-offset-2 col-sm-10">
					<button name="submit" value="submit" name="submit" class="btn btn-info">KIRIM</button>
				  </div>
				</div>
		</div>
	</div>
</div>   
</div>

<?php require "base/footer.php" ?>