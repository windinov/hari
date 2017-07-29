<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
		@foreach ($ortu as $data)
		Nama Ibu : {{$data->nama_ibu}}<br>
		Nama Ayah : {{$data->nama_ayah}}<br>
		Umur Ibu : {{$data->umur_ibu}}<br>
		Umur Ayah : {{$data->umur_ayah}}<br>
		Nama anak :
		@foreach($data->anak as $key)
		<li>{{$key->nama}}</li>
		@endforeach
		@endforeach

		
</body>
</html>