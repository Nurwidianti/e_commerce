<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<style>
	/*body{
		background-image: url("assets/img/forest.jpg");
		 background-repeat: no-repeat;
	}*/
	.form-group{
	  height:600px;
      width:520px;
      padding: 100px;
      border: 7px solid #F0F8FF;
      background: rgba(3,3,3,0.3);
      margin: 5% 5% 10% 25% ;
      border-radius: 20px;
      margin-right: 85px; 
      color: black;
      align-content: center;
      background-repeat: no-repeat;
	}
</style>
	<div class="container">
	<form method="POST" action="aksi_form/tambah.php">
	  <div class="form-group">
	  	<h2><center>Form Registrasi</center></h2>
	    <label for="nama">nama</label>
	    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama">
	  	<label for="alamat">alamat</label>
	    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat">
	    <label for="email">email</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email"><br>
	    <label for="Tgl_Lahir">Tgl Lahir</label>
	    <input type="date" name="bday"><br>
	  	<label>Jenis Kelamin</label>
	    <input type="radio" name="jenis_kelamin" value="Laki-laki">
	    Laki-laki
	    <input type="radio" name="jenis_kelamin" value="Perempuan">
	    Perempuan
	  	<label for="hp">no HP</label>
	    <input type="text" class="form-control" id="hp" name="no_hp" placeholder="Masukan no HP"><br>
	    <label for="password">password</label>
	    <input type="password" class="form-control" id="password" name="password"><br>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</form>
</body>
</html>