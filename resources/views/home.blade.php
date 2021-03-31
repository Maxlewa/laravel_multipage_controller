@extends('layouts.index')

@section('content')

<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src={{$varHome[0]->image}} alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$varHome[0]->titre}}</span>
            <span class="section-heading-lower">{{$varHome[0]->sousTitre}}</span>
          </h2>
          <p class="mb-3">{{$varHome[0]->texte}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$varHome[0]->button}}</a>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{$varHome[1]->titre}}</span>
              <span class="section-heading-lower">{{$varHome[1]->sousTitre}}</span>
            </h2>
            <p class="mb-0">{{$varHome[1]->texte}}</p>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection