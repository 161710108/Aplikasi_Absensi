@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<!--nav-->
				@include('layouts.dashboard')
			<!--end nav-->
	</div>
	<div class="col-md-10">
			<div class="panel panel-danger">
			  <div class="panel-heading">Data Keterangan
			  	<div class="panel-title pull-right"><a href="{{ route('keterangan.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Keterangan</th>
					  <th>Siswa</th>
					  <th>Kelas</th>
					  <th>Jurusan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($k as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->keterangan }}</td>
				    	<td>@foreach($data->Absensi as $b)<li>{{ $b->id_siswa }}@endforeach</li></td>
				        <td>@foreach($data->Absensi as $b)<li>{{ $b->kelas }}@endforeach</li></td>
				        <td>@foreach($data->Absensi as $b)<li>{{ $b->jurusan }}@endforeach</li></td>

<td>
	<a class="btn btn-warning" href="{{ route('keterangan.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('keterangan.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('keterangan.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection