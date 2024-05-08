<!DOCTYPE html>
<html>
<head>
	<title>Dashboard mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
	<h2>Dashboard</h2>
	<h3>Data mahasiswa</h3>
 
	<a href="/student/add"> + Tambah data mahasiswa</a>
	
	<br/>
	<br/>
 
	<table border="1" class="table table-bordered">
		<tr>
            <th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $mhs)
		<tr>
            <td>{{ $mhs->nim }}</td>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->alamat }}</td>
			<td>{{ $mhs->notelp }}</td>
			<td>{{ $mhs->ipk }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/student/edit/{{ $mhs->nim }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/student/delete/{{ $mhs->nim }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>