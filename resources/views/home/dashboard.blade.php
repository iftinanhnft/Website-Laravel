@extends('templates.main')

@section('navbar')
 @include('templates.navbar')
@endsection

@section('dashboard')
<h2 class="sebagai">Hi {{ Auth::user()->level }} PenaQu!</h2>
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
        <a href="\tambah" class="btn btn-light mb-2 btn-tambah"><i class="bi bi-plus-square-fill"></i> Tambah</a>
        <div class="table100 ver2 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nama Barang</th>
									<th class="cell100 column2">Jumlah Stok</th>
									<th class="cell100 column3">Harga</th>
									<th class="cell100 column4">Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								@foreach ($data as $item)
								<tr class="row100 body">
									<td class="cell100 column1">{{ $item->nama}}</td>
									<td class="cell100 column2">{{ $item->jumlah}}</td>
									<td class="cell100 column3">{{ $item->harga}}</td>
									
									<td class="cell100 column4">
                                        <!--<a href="/tambah"> <i class="bi bi-plus-square-fill"></i></a>-->
                                        <a href="{{ url('/edit/'. $item->id)}}"> <i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('/destroy/'. $item->id)}}"> <i class="bi bi-trash-fill"></i></a>
                                    </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
        </div>
		<a class="btn btn-white btn-circled" href="/logout" style="margin-top:20px" >Logout</a>
    </div>
</div>

@endsection
