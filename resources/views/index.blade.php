<!DOCTYPE html>
<html>
<head>
	<title>Rafi Aqnan Pebrian - Sinau Laravel</title>
</head>
<body>

	<h2>Perpustakaan</h2>
	<h3>Data Buku</h3>

	<a href="/buku/tambah"> + Tambah buku Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr  >
			<th >ID</th>
			<th >Judul</th>
			<th >Penerbit</th>
			<th >Tahun Terbit</th>
			<th >Pengarang</th>
			<th >Opsi</th>
		</tr>	
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->judul }}</td>
			<td>{{ $b->penerbit }}</td>
			<td>{{ $b->tahun_terbit }}</td>
			<td>{{ $b->pengarang }}</td>
			<td>
				<a  href="/buku/edit/{{ $b->id }}">Edit</a>
				|
				<a  href="/buku/hapus/{{ $b->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>