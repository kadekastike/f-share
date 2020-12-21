@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/style.css">
<style>
 .iconWeb{
     clip-path: circle(50%);
 }
</style>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 mt-8 ml-3 my-4">
                <h2 class="display-4">F-Share</h2>
                <p class="desc">Platform untuk berbagi file jurnal</p>
                <p>Sharing is Caring</p>
            </div>
            <div class="col-lg-5 offset-lg-1 text-center d-none d-lg-block d-md-none mt-4 mr-auto">
                <img src="/img/pic.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/img/simple.png" alt="" style="margin-left:auto; height:300px; color:#3d63e2">
            <h3>Simple</h3>
            <p>F-share memiliki tampilan yang sederhana, sehingga lebih mudah dimengerti dalam proses penggunaannya.</p>
        </div>
        <div class="col-4">
            <img src="/img/inter.png" id="iconWeb" alt=""style="margin-left:auto;height:300px; width:300px;">
            <h3>Mudah Diakses</h3>
            <p>Karena F-Share berbasis website, maka platform ini dapat diakses melalui media apapun baik itu smartphone, komputer dan laptop.</p>
        </div>
        <div class="col-4">
            <img src="/img/privasi.png" alt="" style="margin-left:auto;height:300px;">
            <h3>Privasi</h3>
            <p>Jurnal pada f-share dapat dipublikasikan maupun disimpan untuk diarsipkan. Sehingga f-share juga dapat digunakan sebagai platform untuk menyimpan jurnal yang telah anda buat</p>
        </div>
    </div>

</div>
<footer class="page-footer font-small blue" style="background-color:#3d63e2; color:white">
    <div class="footer-copyright text-center py-3">© 2020 Copyright: F-Share
    </div>
</footer>
@endsection