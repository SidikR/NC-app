@extends('layouts.lp')

@section('container')
<div class="container-1 d-flex align-items-center justify-content-center">
  <div class="main1 d-flex flex-sm-column flex-lg-row align-items-center justify-content-between">
    <div class="w-100 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1 class="color-white">Bimbel Terbaik ITERA</h1>
      <p class="color-white">Ketika yang lain berjalan maka kamu harus Berlari</p>
      <button type="button" class="btn btn-primary btn-sm">Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-1 w-100">
      <img class="w-100" src="{{ asset('assets/image 17.png') }} " alt="">
    </div>
  </div>
</div>

<div id="fisdas" class="container-2 d-flex align-items-center justify-content-center">
  <div class="main1 d-flex flex-sm-column flex-lg-row align-items-center justify-content-between">
    <div class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Fisika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm">Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="{{ asset('assets/fisika.png') }}">
    </div>
  </div>
</div>

<div id="kimdas" class="container-2 d-flex align-items-center justify-content-center">
  <div class="main1 d-flex flex-sm-column flex-lg-row-reverse align-items-center justify-content-between">
    <div class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Fisika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm">Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="{{ asset('assets/fisika.png') }}">
    </div>
  </div>
</div>

<div id="matdas" class="container-3 d-flex align-items-center justify-content-center">
  <div class="color-white main1 d-flex flex-sm-column flex-lg-row align-items-center justify-content-between">
    <div class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Matematika Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm">Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="{{ asset('assets/fisika.png') }}">
    </div>
  </div>
</div>

<div id="biodas" class="container-2 d-flex align-items-center justify-content-center">
  <div class="main1 d-flex flex-sm-column flex-lg-row-reverse align-items-center justify-content-between">
    <div class="w-100 p-3 d-sm-flex d-lg-block flex-sm-column align-items-center justify-content-center">
      <h1>Biologi Dasar</h1>
      <p>Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
      <button type="button" class="btn btn-primary btn-sm">Gabung Sekarang</button>
    </div>
    <div class="landingpage-img-2 w-75">
      <img class="w-100" src="{{ asset('assets/fisika.png') }}">
    </div>
  </div>
</div>

<div class="container-2 d-flex align-items-center justify-content-center">
  <h1>Apa Kata Mereka?</h1>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
@endsection