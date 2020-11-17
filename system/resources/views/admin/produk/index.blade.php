@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
				<div class="card-header">
					<strong>Data Produk</strong>
					<a href="{{url('admin/create')}}" class="btn btn-sm btn-primary tombol"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead class="bg-primary">
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Lokasi</th>
							<th>Gambar</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group form-inline">
											<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-warning"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-danger"><i class="fa fa-edit"></i></a>
										@include('admin.template.utils.delete', ['url' =>url('admin/produk', $produk->id)])
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
								<td>{{$produk->lokasi}}</td>
								<td>Null</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>

@endsection