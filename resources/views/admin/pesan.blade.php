@extends('layout.header')
@section('title','Pesan')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">   
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Pesan Pengunjung Virtual Tour OSIS MPR Wikrama Bogor</h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>isi</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{  $datas->count() * ($datas->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{$data->dataPengunjung->name}}</td>
                        <td>{{$data->isi}}</td>
                        <td>
                            <form action="{{ url('pesan/'.$data->id) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm text-white" onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');"><i class="mdi mdi-delete"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                {{ $datas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection