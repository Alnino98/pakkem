<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<!-- Begin Page Content -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-8">
            <h1 class="h2 mb-4">Kirim Email Pendaftar</h1>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Your name">
            </div>

            <div class="form-group">
              <label for="email">Alamat Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>

            <div class="form-group">
              <label>Describe the condition in detail</label>
              <textarea id="editor"></textarea>
            </div>

            <div class="form-group">
                <label for="phone">Primary phone number</label>
                <input type="text" class="form-control" id="phone" placeholder="">
            </div>

            <hr>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label" for="terms">I agree to the <a href="#">terms and conditions</a></label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
    
    <script src="../js/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
                    selector:'#editor',
                    menubar: false,
                    statusbar: false,
                    plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
                    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
                    skin: 'bootstrap',
                    toolbar_drawer: 'floating',
                    min_height: 200,           
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
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- /.container-fluid -->
<?php require "base/footer.php"; ?>