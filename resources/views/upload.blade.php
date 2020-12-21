@extends('layouts.app')
@section('title')
Jurnal Saya | F-Share
@endsection
@section('content')
<div class="container">
    <br>
    <h2>Daftar Jurnal</h2>
    <hr>
    <button type="button" class="btn btn-primary" style="margin-bottom: 10px;" data-toggle="modal" data-target="#formTambah"> <span>+Tambah Jurnal</span></button>
    <table class="table table-striped">
        <thead class="bg-primary">
            
            <tr>
                <th scope="col">Judul Jurnal</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tipe</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jurnal as $j)
            <tr>
                <td>{{$j->judul_jurnal}}</td>
                <td>{{$j->kategori}}</td>
                <td>{{$j->tipe}}</td>

                <td><a href="/jurnal/hapus/{{$j->jurnal_id}}"><button class="btn btn-danger fa fa-trash">Hapus</button></a>
            <a href="/jurnal/lihat/{{$j->jurnal_id}}"><button class="btn btn-primary">Lihat</button></a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div id="formTambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Jurnal</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/jurnal/upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group row">
                            <label for="judul_jurnal" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text"name="judul_jurnal" class="form-control" placeholder="Judul Jurnal">
                            </div>
                        </div>
    
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kategori" value="Sains dan Teknologi">
                                        <label class="form-check-label" for="kategori">
                                            Sains dan Teknologi
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="kategori" value="soshum" >
                                        <label class="form-check-label" for="kategori">
                                            Sosial dan Humanira
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="baru">
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Tipe</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipe" value="publik">
                                        <label class="form-check-label" for="tipe">
                                            Public
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="tipe" value="private">
                                        <label class="form-check-label" for="tipe">
                                            Private
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="file">File Jurnal</label>
                            <input type="file" class="form-control-file" name="file">
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" value="Upload" class="btn btn-primary"> Submit </button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection