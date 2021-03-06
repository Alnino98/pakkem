<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Formulir Pendaftaran Anggota PAKKEM">
      <meta name="author" content="Mongtuh.com">
      <meta name="keywords" content="Pendaftaran/Registration">
      <!-- Title Page-->
      <title>Pendaftaran Keanggotaan PAKKEM</title>
      <!-- Icons font CSS-->
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
      <!-- Font special for pages-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <!-- Vendor CSS-->
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
      <!-- Main JS-->
      <script src="js/global.js"></script>
      <!-- Main CSS-->
      <link href="css/main.css" rel="stylesheet" media="all">
      <!-- Favicon-->
      <link rel="icon" href="assets/favicon.ico" type="image/ico">
      <link rel="android-chrome" sizes="512x512" href="assets/android-chrome-512x512.png">
      <link rel="android-chrome" sizes="192x192" href="assets/android-chrome-192x192.png">
      <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
      <link rel="favicon" sizes="48x48" href="assets/favicon.ico">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
      <link rel="manifest" href="assets/site.webmanifest">
      <link rel="stylesheet" href="css/util.css">
      <link rel="stylesheet" href="css/main3.css">
      <style>
         /* Style the button that is used to open and close the collapsible content */
         .collapsible {
         background-color: #eee;
         color: #444;
         cursor: pointer;
         padding: 18px;
         width: 100%;
         border: none;
         text-align: left;
         outline: none;
         font-size: 15px;
         }
         /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
         .active, .collapsible:hover {
         background-color: #ccc;
         }
         .collapsible:after {
         content: '\02795'; /* Unicode character for "plus" sign (+) */
         font-size: 13px;
         color: white;
         float: right;
         margin-left: 5px;
         }
         .active:after {
         content: "\2796"; /* Unicode character for "minus" sign (-) */
         }
         .content {
         padding: 0 18px;
         background-color: #ccc;
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.2s ease-out;
         }
         .text-success{
            color: #32a832;
         }
      </style>
   </head>
   <body>
      <form method="POST" action="proses_upload_foto.php" enctype="multipart/form-data">
         <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w680">
               <div class="card card-1">
                  <div class="card-heading"></div>
                  <div class="card-body">
                  <?php if(isset($_GET['pesan'])){ ?>
                     <p class="shadow p-3 mb-5 bg-white rounded text-center text-success">Data tersimpan silakan cek email anda dan mohon tunggu selam 24 jam untuk mendapatkan informasi mengenai aktivasi akun anda.</p>
                     <br>
                  <?php }?>
                     <h2 class="title">Formulir Pendaftaran</h2>
                     <!-- Nama Lengkap -->
                     <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="NAMA LENGKAP" name="nama">
                     </div>
                     <!-- Instansi -->                        
                     <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="INSTANSI" name="instansi">
                     </div>
                     <!-- Tempat Lahir -->                        
                     <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="TEMPAT LAHIR" name="tempat_lahir">
                     </div>
                     <div class="row row-space">
                        <!-- Tanggal Lahir -->                            
                        <div class="col-2">
                           <div class="input-group">
                              <input class="input--style-1 js-datepicker" type="date" placeholder="TANGGAL LAHIR" name="tanggal_lahir">
                              <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                           </div>
                        </div>
                        <!-- Gender -->
                        <div class="col-2">
                           <div class="input-group">
                              <div class="rs-select2 js-select-simple select--no-search">
                                 <select name="gender">
                                    <option disabled="disabled" selected="selected">JENIS KELAMIN</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                 </select>
                                 <div class="select-dropdown"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- NIK -->                        
                     <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="NIK" name="nik">
                     </div>
                     <!-- Email -->
                     <div class="input-group">
                        <input class="input--style-1" type="email" placeholder="EMAIL" name="email">
                     </div>
                     <!-- No HP -->
                     <div class="row row-space">
                        <div class="col-2">
                           <div class="input-group">
                              <input class="input--style-1" type="text" placeholder="NOMER HP" name="no_hp">
                           </div>
                        </div>
                        <!-- Bisa WA -->
                        <div class="col-2">
                           <div class="input-group">
                              <div class="rs-select2 js-select-simple select--no-search">
                                 <select name="bisa_wa">
                                    <option disabled="disabled" selected="selected">BISA WHATSAPP</option>
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                 </select>
                                 <div class="select-dropdown"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Pendidikan -->                        
                     <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                           <select name="pendidikan">
                              <option disabled="disabled" selected="selected">PENDIDIKAN TERAKHIR</option>
                              <option>D III</option>
                              <option>D IV</option>
                              <option>S1</option>
                              <option>S2</option>
                              <option>S3</option>
                           </select>
                           <div class="select-dropdown"></div>
                        </div>
                     </div>
                     <!-- Sertifikat --> 
                     <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                           <select name="sertifikat">
                              <option disabled="disabled" selected="selected">ADA SERTIFIKAT</option>
                              <option>Ya, ada</option>
                              <option>Tidak ada</option>
                           </select>
                           <div class="select-dropdown"></div>
                        </div>
                     </div>
                     <!-- Start upload Sertifikat -->
                     <div class="input-group">
                        <option class="collapsible">Upload Sertifikat</option>
                        <div class="content">
                           <input class="input--style-1" type="text" placeholder="  Nama Pemilik" name="nama_pemilik2">
                           <input class="input--style-1" type="text" placeholder="  Keterangan" name="keterangan2">
                           <div class="form-group">
                              <label for="exampleFormControlFile1"></label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="sertifikat_upload" >
                           </div>
                           <br>   
                           <p><i>*format gambar .png /.jpg</i></p>
                        </div>
                     </div>
                     <!-- Start upload Foto Diri -->
                     <div class="input-group">
                        <option class="collapsible">Upload foto</option>
                        <div class="content">
                           <!-- <input class="input--style-1" type="text" placeholder="  Keterangan" name="keterangan"> -->
                           <input class="input--style-1" type="text" placeholder="" name="keterangan">
                           <input class="input--style-1" type="text" placeholder="  Nama Pemilik" name="nama_pemilik">
                           <div class="form-group">
                              <label for="exampleFormControlFile1"></label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto_upload">
                           </div>
                           <br>   
                           <p><i>*format gambar .png /.jpg</i></p>
                        </div>
                     </div>
                     <!-- Info Tambahan -->
                     <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="INFO TAMBAHAN TENTANG ANDA" name="info_tambahan">
                     </div>
                     <div class="row row-space">
                     </div>
                     <div class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit" name="submit">KIRIM</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <!-- Jquery JS-->
      <script>
         var coll = document.getElementsByClassName("collapsible");
         var i;
         
         for (i = 0; i < coll.length; i++) {
           coll[i].addEventListener("click", function() {
             this.classList.toggle("active");
             var content = this.nextElementSibling;
             if (content.style.maxHeight){
               content.style.maxHeight = null;
             } else {
               content.style.maxHeight = content.scrollHeight + "px";
             }
           });
         }
      </script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <!-- Vendor JS-->
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/datepicker/moment.min.js"></script>
      <script src="vendor/datepicker/daterangepicker.js"></script>
   </body>
   <!-- This templates was made by Mongtuh: Automation Solutions (https://mongtuh.com) -->
</html>
<!-- end document-->