@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Author
	<div class="panel-title pull-right"><a href="/author/create">Tambah Data</a></div>
	</div>
<div class="panel-body">
	<table class="table">
	<thead>
		<tr>
			<th>Nama</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($author as $data)
	<tr>
	<td>{{$data->nama}}</td>
	</td>
	   <td>
	   <a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a>
	   </td>
	   <td>
	   	<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a>
	   </td>
	   <td>
	   <form action="{{route('author.destroy',$data->id)}}" method="post">
	   <input type="hidden" name="_method" value="DELETE">
	   <input type="hidden" name="_token">
	   <input type="submit" value="DELETE" class="btn btn-danger">
	   {{csrf_field()}}
	   </form>
	   </td>
	   </tr>
	   @endforeach
	   </tbody>
	   </table>
	   </div>
</div>
</div>
@endsection