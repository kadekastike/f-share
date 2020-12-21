@extends('layouts.app')
@section('title')
Lihat Jurnal | F-Share
@endsection

@section('content')
<div class="container">
    <br>
    <h4 class="judul" style="font-weight: bold;color:#0dbbfa;"><span style="color:#0dbbfa">Daftar</span> Jurnal</h4>
    @foreach($jurnal as $j)
    <div class="row">
        <div class="col">
            <p>{{$j->judul_jurnal}}</p>
            <p>Kategori : {{$j->kategori}}</p>
            <p>Diposting oleh : {{$j->nama_user}}</p>
        </div>
        <div class="col">
            <embed src="{{ url('/data_file/'.$j->file) }}" type="application/pdf" style="width: 120%; height: 600px;">
        </div>
    </div>
    @endforeach
</div>
@endsection