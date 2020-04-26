<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning { color: #FF0000; }
	</style>
</head>
<center>
<body>

<?php
$error_nama = "";
$error_jkel = "";
$error_nisn = "";
$error_nik = "";
$error_tmplahir = "";
$error_tglahir = "";
$error_noreg = "";
$error_agama = "";
$error_kwn = "";
$error_bk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_pos = "";
$error_lintang = "";
$error_bujur = "";
$error_tinggal = "";
$error_transportasi = "";
$error_nokks = "";
$error_anak = "";
$error_kps = "";
$error_nokps = "";

$nama = "";
$jkel = "";
$nisn = "";
$nik = "";
$tmplahir = "";
$tglahir = "";
$noreg = "";
$agama = "";
$kwn = "";
$bk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$pos = "";
$lintang = "";
$bujur = "";
$tinggal = "";
$transportasi = "";
$nokks = "";
$anak = "";
$kps = "";
$nokps = "";


if ($_SERVER ["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["nama"]))
	{
		$error_nama = " Nama Tidak Boleh Kosong";
	}
	else
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST["nama"]))
		{
			$error_nama = "Inputan Hanya boleh huruf dan spasi";
		} else {
			$nama = cek_input($_POST["nama"]);
		}
	}

	if (empty($_POST["jkel"]))
	{
		$error_jkel = "Tidak boleh kosong";
	}
	else
	{
		$jkel = cek_input($_POST["jkel"]);
	}

	if (empty($_POST["nisn"]))
	{
		$error_nisn = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["nisn"]))
		{
			$error_nisn = 'hanya boleh angka';
		} else {
			$nisn = cek_input($_POST["nisn"]);
		}
	}

	if (empty($_POST["nik"]))
	{
		$error_nik = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["nik"]))
		{
			$error_nik = 'hanya boleh angka';
		} else {
			$nik = cek_input($_POST["nik"]);
		}
	}

	if (empty($_POST["tmplahir"]))
	{
		$error_tmplahir = "Tidak boleh kosong";
	}
	else
	{
		$tmplahir = cek_input($_POST["tmplahir"]);
	}

	if (empty($_POST["tglahir"]))
	{
		$error_tglahir = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["tglahir"]))
		{
			$error_tglahir = 'hanya boleh angka';
		} else {
			$tglahir = cek_input($_POST["tglahir"]);
		}
	}

	if (empty($_POST["noreg"]))
	{
		$error_noreg = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["noreg"]))
		{
			$error_noreg = 'hanya boleh angka';
		} else {
			$noreg = cek_input($_POST["noreg"]);
		}
	}

	if (empty($_POST["agama"]))
	{
		$error_agama = "Tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
	}

	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
	}

	if (empty($_POST["bk"]))
	{
		$error_bk = "Tidak boleh kosong";
	}
	else
	{
		$bk = cek_input($_POST["bk"]);
	}

	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}

	if (empty($_POST["rt"]))
	{
		$error_rt = "Tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
	}

	if (empty($_POST["rw"]))
	{
		$error_rw = "Tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
	}

	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
	}

	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "Tidak boleh kosong";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
	}

	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Tidak boleh kosong";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
	}

	if (empty($_POST["pos"]))
	{
		$error_pos = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["pos"]))
		{
			$error_pos = 'hanya boleh angka';
		} else {
			$pos = cek_input($_POST["pos"]);
		}
	}

	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}

	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}

	if (empty($_POST["tinggal"]))
	{
		$error_tinggal = "Tidak boleh kosong";
	}
	else
	{
		$tinggal = cek_input($_POST["tinggal"]);
	}

	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "Tidak boleh kosong";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
	}

	if (empty($_POST["nokks"]))
	{
		$error_nokks = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["nokks"]))
		{
			$error_nokks = 'hanya boleh angka';
		} else {
			$nokks = cek_input($_POST["nokks"]);
		}
	}

	if (empty($_POST["anak"]))
	{
		$error_anak = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["anak"]))
		{
			$error_anak = 'hanya boleh angka';
		} else {
			$anak = cek_input($_POST["anak"]);
		}
	}

	if (empty($_POST["kps"]))
	{
		$error_kps = "Tidak boleh kosong";
	}
	else
	{
		$kps = cek_input($_POST["kps"]);
	}

	if (empty($_POST["nokps"]))
	{
		$error_nokps = "tidak boleh kosong";
	}
	else
	{
		
		if(!is_numeric($_POST["nokps"]))
		{
			$error_nokps = 'hanya boleh angka';
		} else {
			$nokps = cek_input($_POST["nokps"]);
		}
	}


}

function cek_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<style type="text/css">
				.card-header {
					background-color: grey;
					text-align: center;
				}
				</style>
				Formulir Peserta Didik	
			</div>
			<?php
			echo date('d F Y');
			?>
			<div class="card-header">
				Data Pribadi
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap*</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control <?php echo($error_nama != "" ? "is-invalid" : "");?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="Jkel" class="col-sm-3 col-form-label">Jenis Kelamin*</label>
					<div class="col-sm-9">
						<input type="text" name="jkel" class="form-control <?php echo($error_jkel != "" ? "is-invalid" : "");?>" id="jkel" placeholder="L/P" value="<?php echo $jkel; ?>"><span class="warning"><?php echo $error_jkel; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nisn" class="col-sm-3 col-form-label">NISN*</label>
				<div class="col-sm-9">
						<input type="text" name="nisn" class="form-control <?php echo($error_nisn != "" ? "is-invalid" : "");?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class="col-sm-3 col-form-label">NIK*</label>
				<div class="col-sm-9">
						<input type="text" name="nik" class="form-control <?php echo($error_nik != "" ? "is-invalid" : "");?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
					</div>
				</div>
					
				<div class="form-group row">
					<label for="tmplahir" class="col-sm-3 col-form-label">Tempat Lahir*</label>
					<div class="col-sm-9">
						<input type="text" name="tmplahir" class="form-control <?php echo($error_tmplahir != "" ? "is-invalid" : "");?>" id="tmplahir" placeholder="Tempat Lahir" value="<?php echo $tmplahir; ?>"><span class="warning"><?php echo $error_tmplahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tglahir" class="col-sm-3 col-form-label">Tanggal Lahir*</label>
				<div class="col-sm-9">
						<input type="text" name="tglahir" class="form-control <?php echo($error_tglahir != "" ? "is-invalid" : "");?>" id="tglahir" placeholder="ex:03072000 /ddmmyyyy" value="<?php echo $tglahir; ?>"><span class="warning"><?php echo $error_tglahir; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="noreg" class="col-sm-3 col-form-label">Nomor Registrasi*</label>
				<div class="col-sm-9">
						<input type="text" name="noreg" class="form-control <?php echo($error_noreg != "" ? "is-invalid" : "");?>" id="noreg" placeholder="No Registrasi" value="<?php echo $noreg; ?>"><span class="warning"><?php echo $error_noreg; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="agama" class="col-sm-3 col-form-label">Agama*</label>
					<div class="col-sm-9">
						<input type="text" name="agama" class="form-control <?php echo($error_agama != "" ? "is-invalid" : "");?>" id="agama" placeholder="Agama Anda" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
					</div>
				</div>


				<div class="form-group row">
					<label for="kwn" class="col-sm-3 col-form-label">Warga Negara*</label>
					<div class="col-sm-9">
						<input type="text" name="kwn" class="form-control <?php echo($error_kwn != "" ? "is-invalid" : "");?>" id="kwn" placeholder="Warga Negara" value="<?php echo $kwn; ?>"><span class="warning"><?php echo $error_kwn; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bk" class="col-sm-3 col-form-label">Kebutuhan Khusus*</label>
					<div class="col-sm-9">
						<input type="text" name="bk" class="form-control <?php echo($error_bk != "" ? "is-invalid" : "");?>" id="bk" placeholder="" value="<?php echo $bk; ?>"><span class="warning"><?php echo $error_bk; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-sm-3 col-form-label">Alamat Jalan*</label>
					<div class="col-sm-9">
						<input type="text" name="alamat" class="form-control <?php echo($error_alamat != "" ? "is-invalid" : "");?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rt" class="col-sm-3 col-form-label">RT*</label>
					<div class="col-sm-9">
						<input type="text" name="rt" class="form-control <?php echo($error_rt != "" ? "is-invalid" : "");?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="rw" class="col-sm-3 col-form-label">RW*</label>
					<div class="col-sm-9">
						<input type="text" name="rw" class="form-control <?php echo($error_rw != "" ? "is-invalid" : "");?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="dusun" class="col-sm-3 col-form-label">Dusun*</label>
					<div class="col-sm-9">
						<input type="text" name="dusun" class="form-control <?php echo($error_dusun != "" ? "is-invalid" : "");?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan*</label>
					<div class="col-sm-9">
						<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan != "" ? "is-invalid" : "");?>" id="kelurahan" placeholder="kelurahan" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan*</label>
					<div class="col-sm-9">
						<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan != "" ? "is-invalid" : "");?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="pos" class="col-sm-3 col-form-label">Kode Pos*</label>
				<div class="col-sm-9">
						<input type="text" name="pos" class="form-control <?php echo($error_pos != "" ? "is-invalid" : "");?>" id="pos" placeholder="Kode Pos" value="<?php echo $pos; ?>"><span class="warning"><?php echo $error_pos; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="lintang" class="col-sm-3 col-form-label">Lintang*</label>
					<div class="col-sm-9">
						<input type="text" name="lintang" class="form-control <?php echo($error_lintang != "" ? "is-invalid" : "");?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="bujur" class="col-sm-3 col-form-label">Bujur*</label>
					<div class="col-sm-9">
						<input type="text" name="bujur" class="form-control <?php echo($error_bujur != "" ? "is-invalid" : "");?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="tinggal" class="col-sm-3 col-form-label">Tempat Tinggal*</label>
					<div class="col-sm-9">
						<input type="text" name="tinggal" class="form-control <?php echo($error_tinggal != "" ? "is-invalid" : "");?>" id="tinggal" placeholder="tinggal" value="<?php echo $tinggal; ?>"><span class="warning"><?php echo $error_tinggal; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="transportasi" class="col-sm-3 col-form-label">Transportasi*</label>
					<div class="col-sm-9">
						<input type="text" name="transportasi" class="form-control <?php echo($error_transportasi != "" ? "is-invalid" : "");?>" id="transportasi" placeholder="transportasi" value="<?php echo $transportasi; ?>"><span class="warning"><?php echo $error_transportasi; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokks" class="col-sm-3 col-form-label">No KKS*</label>
				<div class="col-sm-9">
						<input type="text" name="nokks" class="form-control <?php echo($error_nokks != "" ? "is-invalid" : "");?>" id="nokks" placeholder="No KKS" value="<?php echo $nokks; ?>"><span class="warning"><?php echo $error_nokks; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="anak" class="col-sm-3 col-form-label">Anak Nomor*</label>
				<div class="col-sm-9">
						<input type="text" name="anak" class="form-control <?php echo($error_anak != "" ? "is-invalid" : "");?>" id="anak" placeholder="anak nomor" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="kps" class="col-sm-3 col-form-label">Penerima KPS*</label>
					<div class="col-sm-9">
						<input type="text" name="kps" class="form-control <?php echo($error_kps != "" ? "is-invalid" : "");?>" id="kps" placeholder="Ya/Tidak" value="<?php echo $kps; ?>"><span class="warning"><?php echo $error_kps; ?></span>
					</div>
				</div>

				<div class="form-group row">
					<label for="nokps" class="col-sm-3 col-form-label"> Nomor KPS*</label>
				<div class="col-sm-9">
						<input type="text" name="nokps" class="form-control <?php echo($error_nokps != "" ? "is-invalid" : "");?>" id="nokps" placeholder="NO KPS" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
					</div>
				</div>


				<div class="form-group-row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</center>
</html>

<?php

$server = "localhost";
$username = "root";
$password = "";
$namadb = "my_db";

$conn = mysqli_connect($server,$username,$password)or die("Gagal Input");
$con = mysqli_select_db($conn,$namadb);

if (!empty($nama) && !empty($jkel) && !empty($nisn) && !empty($nik) && !empty($tmplahir) && !empty($tglahir) && !empty($noreg) && !empty($agama) && !empty($kwn) && !empty($bk) && !empty($alamat) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($kelurahan) && !empty($kecamatan) && !empty($pos) && !empty($tinggal) && !empty($transportasi) && !empty($anak) && !empty($kps)) {

	$sql = mysqli_query($conn,"INSERT INTO formulir (Nama Lengkap,Jenis Kelamin,nisn,nik,Tempat Lahir,Tanggal Lahir,No Registrasi,Agama,Warga Negara,Kebutuhan Khsus,Alamat,RT,RW,Dusun,Kelurahan,Kecamatan,Kode Pos,Lintang,Bujur,Tempat Tinggal,Transportasi,No KKS,Anak Nomor,Penerima KPS,No KPS) VALUES ('$nama','$jkel','$nisn','$nik','$tmplahir','$tglahir','$noreg','$agama','$kwn','$bk','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$pos','$lintang','$bujur','$tinggal','$transportasi','$nokks','$anak','$kps','$nokks')");

if ($sql) {
	echo "<script>alert('Data Sukses Dimasukkan')</script>";
	echo "<script>location.href='form11.php'</script>";
}else{
	echo "<script>alert('Cek Kembali Data Anda')</script>";
}
}
?>