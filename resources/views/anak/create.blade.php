@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data anak
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('anak.store')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
		<label class="control-lable">Nama</label>
		<input type="text" name="a" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Orangtua</label>
		<select class="form-control" name="b">
			@foreach($ortu as $data)
			<option value="{{$data->id}}"> {{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<label class="control-lable">Umur</label>
		<input type="number" name="c" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="d" class="form-control" rows="10" required=""></textarea>
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection