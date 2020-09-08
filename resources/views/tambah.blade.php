<html>
<head>
	<title>CRUD BUKU</title>
</head>
<body>
 
	<h2><a href="{{ route('home') }}">BOOK</a></h2>
	<h3>Data pelanggan</h3>
 
	
	
	
	<br/>
	<br/>
 
	<form action="{{ route('store') }}" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		jumlah buku <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<td><a href="{{ route('pembelian') }}" class="btn btn-primary height-auto btn-sm">kembali</a>
</body>
</html>