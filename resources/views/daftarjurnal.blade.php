@extends('layouts.app')
@section('title')
Daftar Jurnal | F-Share
@endsection
@section('content')
<div class="container">
    <div class="d-none d-sm-block">
        <div class="row pt-3">
            <div class="col-12">
                <h4 class="judul" style="font-weight: bold;color:#0dbbfa;"><span style="color:#0dbbfa">Daftar</span> Jurnal</h4>
            </div>
            <div class="col-12">
                <p>
                    Berikut adalah list jurnal yang telah di upload oleh semua user
                </p>
            </div>
            @foreach($jurnal as $j)
            <div class="col-lg-3 col-sm-6 py-2 px-2" style="height:fit-content;">
                <div class="card bg-white rounded">

                    <div style="max-height:200px; overflow:hidden;">
                        <div class="card-body">
                            <p class="card-title" id="max-judul" style="font-weight: bold; min-height: 50px">
                                <a href="/jurnal/lihat/{{$j->jurnal_id}}">{{$j->judul_jurnal}}</a>
                            </p>
                            <!-- <p class="max-4-baris" style="min-height: 100px">(RPP 1LEMBAR) Membuat poster bertema cegah Covid-19 dengan berbagai bahan dan teknik, serta melak...
                            </p> -->
                            <div class="mb-2 small text-success" style="min-height: 40px;">{{$j->kategori}}
                            </div>
                        </div>
                        <div class="card-footer p-0">
                            <div class="row no-gutters p-2">
                                <!-- <div class="col-2">
                                    <img src="" style="height: 30px;border-radius: 200px;">
                                </div> -->
                                <div class="col-10 mt-1 text-capitalize">
                                    {{$j->nama_user}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="pt-2 mb-5">
                <a class="btn btn-info" href="/rpp">Selengkapnya <i class=" mdi mdi-arrow-right"></i></a>
            </div> -->
        </div>
    </div>


    @endsection