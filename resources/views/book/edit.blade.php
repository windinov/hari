@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data book
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('book.update',$book->id)}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<div class="form-group">
		<label class="control-lable">Title</label>
		<input type="text" name="a" class="form-control" required="" value="{{$book->Title}}">
		</div>

		<div class="form-group">
		<label class="control-lable">author</label>
		<select class="form-control" name="b">
			@foreach($author as $data)
			<option value="{{$data->id}}"> {{$data->nama}}</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<label class="control-lable">amount</label>
		<input type="text" name="c" class="form-control" required="" value="{{$book->umur}}">
		</div>

		<div class="form-group">
		<label class="control-lable">cover</label>
		<input type="file" name="d" class="form-control" rows="10" required="">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection