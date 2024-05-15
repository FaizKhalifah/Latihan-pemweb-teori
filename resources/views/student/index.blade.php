<!DOCTYPE html>
<html>
<head>
	<title>Dashboard mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin: 5px;
		}
	</style>
</head>
<body>
	
	<div class="judul m-3">
		<h2>Dashboard</h2>
		<h3>Data mahasiswa</h3>
	</div>
	
 
	<a href="/student/add" class="btn btn-primary btn-sm m-3"> + Tambah data mahasiswa</a>
	
	<br/>
	<br/>
	
	<div class="search m-3">
		<p>Cari data mahasiswa : </p>
		<form action="/student/search" method="GET">
			<input type="text" name="search" placeholder="Nama Mahasiswa" value="{{old('search')}}">
			<input type="submit" value="search" class="btn btn-secondary btn-sm">
		</form>
	</div>
	<div class="table m-3">
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
		<div class="pagination m-3 mt-5">
			Halaman : {{$mahasiswa->currentPage()}} <br/>
			Jumlah data : {{$mahasiswa->total()}} <br/>
			Data per halaman : {{$mahasiswa->perPage()}}<br/>
			
		</div>
		<div class="pagination">
			{{$mahasiswa->links('pagination::bootstrap-5')}}
		</div>
	</div>
	
 
 
</body>
</html>