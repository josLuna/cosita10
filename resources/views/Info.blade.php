@extends('Layouts.layout')
@section('titulo')
@endsection
@section('contenido')
<section class="p-4 d-flex justify-content-center text-center w-100">
    <div class="lightbox" data-id="lightbox-iihe4i0u2">
      <div class="row">
        <div class="col-lg-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp" data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp" alt="Table Full of Spices" class="w-100">
        </div>
        <div class="col-lg-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/2.webp" data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/2.webp" alt="Winter Landscape" class="w-100">
        </div>
        <div class="col-lg-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/3.webp" data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/3.webp" alt="View of the City in the Mountains" class="w-100">
        </div>
      </div>
    </div>
  </section>
  <p class="lh-1">
    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio
    dui. Cras mattis pannenkoek purus sit amet fermentum. Praesent commodo cursus magna, vel
    scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit.
    Cras mattis consectetur purus sit amet fermentum.
  </p>
  <video autoplay="true" loop="true" preload="true" poster="https://cceo.com.mx/assets/videos/video.png" width="100%" id="vid">
    <source src="https://cceo.com.mx/assets/videos/1.mp4" type="video/mp4">
    <source src="https://cceo.com.mx/assets/videos/1.webm" type="video/webm">
</video>
@endsection


