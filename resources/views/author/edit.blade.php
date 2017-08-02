@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data author
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('author.update', $author->id)}}" method="post">
		<Input type="hidden" name="_method" value="PUT">
		<Input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
		<label class="control-lable">Nama</label>
		<input type="text" name="a" class="form-control" required="" value="{{$author->nama}}">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection