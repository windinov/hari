<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
		@foreach ($anak as $data)
		Nama : {{$data->nama}}<br>
		Id ortu : {{$data->orangtua_id}}<br>
		Umur : {{$data->umur}}<br>
		Alamat : {{$data->alamat}}<br>
        <hr>
		@endforeach
</body>
</html>