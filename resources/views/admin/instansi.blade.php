@extends('layout.header')
@section('title','Sekolah')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">   
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Data Asal Sekolah Pengunjung Virtual Tour OSIS MPR Wikrama Bogor</h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah Siswa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($instansis as $instansi)
                    <tr>
                        <td>{{$instansis->count() * ($instansis->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{$instansi->nama_instansi}}</td>
                        <td>{{$pengunjung->where('asal_instansi', $instansi->nama_instansi)->count()}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                {{ $instansis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection