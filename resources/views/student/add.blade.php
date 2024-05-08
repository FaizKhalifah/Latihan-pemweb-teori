<!DOCTYPE html>
<html>
<head>
	<title>Dashboard mahasiswa</title>
</head>
<body>
 
	<h2>Dashboard</a></h2>
	<h3>Data mahasiswa</h3>
 
	<a href="/student"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/student/addsave" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
        No Telepon <input type="text" name="notelp" required="required"> <br/>
		IPK <input type="number" name="ipk" min="0" max="4" step="0.01" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>

