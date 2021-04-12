@extends('layouts.index')

@section('content')

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$varStore[0]->titre}}</span>
              <span class="section-heading-lower">{{$varStore[0]->sousTitre}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              @foreach ($varStore[0]->OpenHours as $key=>$day)
              <li class="list-unstyled-item list-hours-item d-flex {{date('D') === $key ? 'today' : ''}}">
                  {{$day[0]}} 
                  <span class="ml-auto">{{$day[1]}} </span>
              </li>
              @endforeach
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$varStore[0]->adresseUn}}</strong>
                <br>
                {{$varStore[0]->adresseDeux}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$varStore[0]->callUs}}</em>
              </small>
              <br>
              {{$varStore[0]->telephone}}
            </p>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{$varStore[1]->image}} alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$varStore[1]->titre}}</span>
                <span class="section-heading-lower">{{$varStore[1]->sousTitre}}</span>
              </h2>
              <p>{{$varStore[1]->texteUn}}</p>
              <p class="mb-0">{{$varStore[1]->texteDeux}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

@endsection