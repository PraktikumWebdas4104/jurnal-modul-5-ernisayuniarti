<?php
$koneksi = new mysqli("localhost", "root", "", "mahasiswa_db");

	if (isset($_POST['submit'])) {

		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$status = true;

			if(!is_int($nim) && strlen($nim)!=10 && strlen($nama)!=25 ){
				echo "registrasi gagal";
				$status =  false;
			}

			if ($status){
				$sql = $koneksi->query("
				INSERT INTO `mahasiswa` (`nim`, `nama`, `email`)
					VALUES (".$nim.", ".$nama.", ".$email.")");
					echo "REGISTRASI SUKSES"."<br>";
			}else{
			}
		}else{
			echo "KONEKSI GAGAL";
		}
	}
?>
