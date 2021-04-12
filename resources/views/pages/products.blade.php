@extends('layouts.index')

@section('content')

{{-- @foreach ($varProducts as $key => $products)

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex {{$key %2 === 1 ? "mr-auto" : "ml-auto"}} rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">{{$products->titre}}</span>
            <span class="section-heading-lower">{{$products->sousTitre}}</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{$products->image}} alt="">
      <div class="product-item-description d-flex {{$key %2 === 1 ? "ml-auto" : "mr-auto"}}">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">{{$products->texte}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endforeach --}}

@foreach ($data as $key => $products)

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex {{$key %2 === 1 ? "mr-auto" : "ml-auto"}} rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">{{$products->titre}}</span>
            <span class="section-heading-lower">{{$products->sousTitre}}</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{$products->image}} alt="">
      <div class="product-item-description d-flex {{$key %2 === 1 ? "ml-auto" : "mr-auto"}}">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">{{$products->texte}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endforeach

@endsection