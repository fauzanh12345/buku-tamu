<?php
	include "config.php";
	
	/* Getting file name */
	$filename 			= $_FILES['file']['name'];
	$ukuran_file 		= $_FILES['file']['size'];
	$tipe_file 			= $_FILES['file']['type'];
	$tmp_file 			= $_FILES['file']['tmp_name'];
	$location 			= "../klinikku/assets/img/".$filename;
	$d 					= strtotime("now");
	$target_dir 		= "../klinikku/assets/img/";
	$uploadOk 			= 1;
	$imageFileType		= pathinfo($location,PATHINFO_EXTENSION);

	/* Valid extensions */
	$valid_extensions = array("jpg","jpeg","png");

	/* Check file extension */
	if(!in_array(strtolower($imageFileType), $valid_extensions)) {?>
   		<script language="JavaScript">
			alert('foto bukan jpg, jpeg dan png!');
			document.location='daftar.php';
		</script>
   	<?php 
   	$uploadOk = 0;
	}

	if($uploadOk == 0){
   	echo " ok";
	}else{
   	/* Upload file */
   	if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
   	  echo $location;
   	}else{
    	 echo "failed";
   	}
	}
  

		//Kirimkan Variabel	
		$tanggal_submit 	= date("Y-m-d h:i:s", $d);
		$nama_pengunjung	= $_POST['nama_pengunjung'];
		$jns_kel			= $_POST['jns_kel'];
		$ktp				= $_POST['ktp'];
		$telp				= $_POST['telp'];
		$email				= $_POST['email'];
		$Keperluan			= $_POST['Keperluan'];
		$Departemen			= $_POST['Departemen'];
		$datepicker			= $_POST['datepicker'];
		$datepicker2		= $_POST['datepicker2'];
		$chapcha			= $_POST['CaptchaInput'];
		$qr_base			= $ktp.$datepicker.$chapcha;
		
		
		
		$input	="INSERT INTO buku_tamu (nama_pelanggan, jns_kel, no_ktp, no_telp, alamat_email, keperluan, id_dep,  tanggal_kunjungan, tanggal_rapid, tanggal_submit, status, file_loc, capcha, qr_base)
			VALUES ('$nama_pengunjung', '$jns_kel', '$ktp', '$telp', '$email', '$Keperluan', '$Departemen', '$datepicker', '$datepicker2', '$tanggal_submit', '0', '$location', '$capcha', '$qr_base')";
	
	 $query_input = $conn->query($input)  or die($conn->error);
      
	if ($query_input) {
		echo "<script>alert('Data Berhasil diinput!')</script>";
		echo "<script>document.location='index.php'</script>";
	}
	
	else {
	//Jika Gagal
	echo "Data Gagal diinput, Silahkan diulangi!";
	}
?>