@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data anak
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('anak.show','$anak->id')}}" method="post">
		<div class="form-group">
		<label class="control-lable">Nama</label>
		<input type="text" name="a" class="form-control" required="" readonly="" value="{{$anak->nama}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Orangtua</label>
		<input class="form-control" readonly="" type="text" name="b" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Umur</label>
		<input type="text" name="c" class="form-control" readonly="" value="{{$anak->umur}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="d" class="form-control" rows="10" readonly="">{{$anak->alamat}}</textarea>
		</div>

	
</form>
</div>
</div>
@endsection