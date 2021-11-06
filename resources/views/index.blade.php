@extends('layout.layout')

@section('table')

<div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data Produksi</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush ">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">Nomor</th>
                  <th scope="col" class="sort">Lokasi</th>
                  <th scope="col" class="sort">Kode Produksi</th>
                  <th scope="col" class="sort">Tanggal Mulai</th>
                  <th scope="col" class="sort">Tanggal Selesai</th>
                  <th scope="col" class="sort">Status</th>
                  <th scope="col" class="sort">Publish</th>
                </tr>
              </thead>
              <tbody class="list">
                  @foreach ($data as $item )
                <tr>
                    <td>{{ $item->urutan }}</td>
                    <td>{{ $item->lokasi->lokasi }}</td>
                    <td>{{ $item->kode_produksi }}</td>
                    <td>{{ $item->tgl_mulai_produksi }}</td>
                    <td>{{ $item->tgl_selesai_produksi }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->publish }}</td>
                </tr>  
                @endforeach                            
              </tbody>
            </table>
            {{ $data->links() }}
          
      
        </div>
      </div>
    </div>

@endsection