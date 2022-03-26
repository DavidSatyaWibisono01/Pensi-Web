@extends('layout.header')
@section('title','Tracking')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">   
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Tracking Pengunjung Virtual Tour OSIS MPR Wikrama Bogor</h4>
                <form action="" id="" class="form-horizontal " method="post" enctype="multipart/form-data">
                    <div class="box-body">                    
                        <table class="table table-bordered" style="width:100%;" align="center">
                            <tbody>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Nama Pengunjung</label></td>
                                    <td style="width:70%;">{{$pengunjung->name}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Asal Instansi</label></td>
                                    <td style="width:70%;">{{$pengunjung->asal_instansi}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan PPLG</label></td>
                                    <td style="width:70%;">{{$data->pplg}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan DKV</label></td>
                                    <td style="width:70%;">{{$data->dkv}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan TJKT</label></td>
                                    <td style="width:70%;">{{$data->tjkt}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan MPLB</label></td>
                                    <td style="width:70%;">{{$data->mplb}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan PMN</label></td>
                                    <td style="width:70%;">{{$data->pmn}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan HTL</label></td>
                                    <td style="width:70%;">{{$data->hotel}}</td>
                                </tr>
                                <tr>
                                    <td style="width:30%;"><label class="col-sm-12 control-label font-bold">Kunjungan KLN</label></td>
                                    <td style="width:70%;">{{$data->kuliner}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><a type="reset" class="btn btn-info pull-right text-white" onclick="history.back()">Back</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection