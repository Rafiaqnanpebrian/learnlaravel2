<!DOCTYPE html>
<html>
<head>
	<title>Rafi Aqnan Pebrian - Sinau Laravel</title>
</head>
<body>
 
	<h2><a>Perpustakaan</a></h2>
	<h3>Data Buku</h3>
 
	<a href="/buku"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/buku/action" method="post">
		{{ csrf_field() }}
		ID <input type="text" name="id" required="required"> <br/>
		Judul <input type="text" name="judul" required="required"> <br/>
		Penerbit <input type="text" name="penerbit" required="required"> <br/>
		Tahun Terbit <input type="number" name="tahun_terbit"required="required"></input> <br/>
		Pengarang <input type="text" name="pengarang" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>