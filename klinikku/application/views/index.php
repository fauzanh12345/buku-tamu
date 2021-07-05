<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pendaftaran Tamu Klinikku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            $("#but_upload").click(function(){

                var fd = new FormData();

                var files = $('#file')[0].files[0];

                fd.append('file',files);

                $.ajax({
                    url:'upload.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response != 0){
                            $("#img").attr("src",response);
                            $('.preview img').show();
                        }else{
                            alert('File not uploaded');
                        }
                    }
                });
            });
        });


    </script>
    <script type="text/javascript">

          let today = new Date().toISOString().slice(0, 10);
          function readURL(input) {
             if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                
                 $('#blah').attr('src', e.target.result);
            
            }
    
             reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            };
          $( function() {
         $('#datepicker').datepicker({
          showOn: "button",
          buttonImage: "assets/ico/Honeyview_datepick (2).png",
          buttonImageOnly: true,
          buttonText: "Select date",
          dateFormat: 'yy-mm-dd',
          minDate :0,
          onSelect: function(dateStr) {
            var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
            var min1 = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
            var max = new Date(min.getTime());
            max.setDate(max.getDate() - 6); // Add one month

            $('#datepicker2').datepicker('option',
             {
                minDate: max, 
                maxDate: min1,
                showOn: "button",
                buttonImage: "assets/ico/Honeyview_datepick (2).png",
                buttonImageOnly: true,
                buttonText: "Select date",



            }).show();

        }

          
          });

          $("#telp").ForceNumericOnly();
          $("#ktp").ForceNumericOnly();
          $("#filegbr").change(function() {
            readURL(this);
       
        });
          

          $('#datepicker2').datepicker({
         
          dateFormat: 'yy-mm-dd'
          
          }).hide();


          });

          // Numeric only control handler


jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (
                key == 8 || 
                key == 9 ||
                key == 13 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};

    
</script>
 

    
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/signin.css">
        <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" href="css/img_upload.css">
       <!-- <link rel="stylesheet" href="assets/js/php-captcha/assets/css/styles.css"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
    <!-- Preloader -->
<form action="index.php/daftar" enctype="multipart/form-data" method="POST"  onsubmit="return checkform(this);">
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="container">


        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="logo-login">
                        <h1><center>Daftar Tamu
                        </center>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="account-box">

                        
                            <div class="form-group">
                                <label for="nama_pengunjung"> Nama Pengunjung</label>
                                <input type="text" name="nama_pengunjung" id="nama_pengunjung" class="form-control" required    >
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kelamin"> Jenis Kelamin</label>
                                <select name="jns_kel" id="jns_kel" class ="form-control" required>
                                    <option value="Laki - Laki"> Laki - Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ktp"> No. KTP</label>
                                <input type="text" name="ktp" id="ktp" class="form-control" required  >
                            </div>
                            <div class="form-group">
                                <label for="No. Telp"> No. Telp</label>
                                <input type="text" name="telp" id="telp" class="form-control" required    >
                            </div>
                            <div class="form-group">
                                <label for="email"> Alamat Email</label>
                                <input type="text" name="email" id="email" class="form-control" required    >
                            </div>
                            <div class="form-group">
                                <label for="datepicker"> Rencana Kunjungan</label>                    
                                <input type="text" name="datepicker" id="datepicker" class="form-control" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="Keperluan"> Keterangan Kunjungan</label>
                                <textarea name="Keperluan" id="Keperluan" class="form-control" required>  </textarea> 
                            </div>
                            <div class="form-group">
                                <label for="Dep_tujuan"> Tujuan</label>
                                <?php 
                                        include('config.php');
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
}                                                echo "Connected successfully";
                                        $sql    = "SELECT * FROM department";
                                        $result = $conn->query($sql)  or die($conn->error);
                                        //$query  = mysqli_query($sql,$conn) or die(mysqli_error());
                                       
                                        while ($data=$result->fetch_assoc()) {
                                            echo "number of rows: " . $result->num_rows;
                                    ?>
                                     <select name="Departemen" id="Departemen" class ="form-control" required>
                                       <option value="<?php echo $data['id_dep'];?>"> <?php echo $data['department_name'];?></option>
                                      </select>
                            </div>      
                                        <div>          
                                            <img id="blah" src="#" alt="File harus berekstensi JPG/JPEG/PNG" width="500px" height="400px" />
                                            <input type="file" id="filegbr" name="file" />
                                        </div>
                            <div class="form-group">
                                <label for="datepicker"> Tanggal Swab/Rapid Test</label>
                                <input type="text" name="datepicker2" id="datepicker2" class="form-control" placeholder="Tanggal rapid/swab test maksimum 7 hari sebelum kedatangan " readonly required> 
                            </div>              
                            <button class="btn btn btn-primary pull-right" type="submit" id="but_upload">
                                Submit data
                            </button>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>





        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">Designed & Developed By Klinikku</h6>
        </div>

    </div>
    <div id="test1" class="gmap3"></div>



    <!--  END OF PAPER WRAP -->




    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</form>
 
  </body>

</html>