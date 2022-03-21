@extends('layout.header')
@section('title','Pengunjung')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">   
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Data Pengunjung Virtual Tour OSIS MPR Wikrama Bogor</h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telephone</th>
                        <th>Asal Instansi</th>
                        <th>Terakhir Berkunjung</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pengunjungs as $pengunjung)
                    <tr>
                        <td>{{  $pengunjungs->count() * ($pengunjungs->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{$pengunjung->name}}</td>
                        <td>{{$pengunjung->email}}</td>
                        <td>{{$pengunjung->no_tlpn}}</td>
                        <td>{{$pengunjung->asal_instansi}}</td>
                        <td>{{$pengunjung->updated_at}}</td>
                        <td><form action="{{ url('/admin/pengunjungs/'.$pengunjung->id) }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm text-white" onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');"><i class="mdi mdi-delete"></i></i></button>
                        </form></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                {{ $pengunjungs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection