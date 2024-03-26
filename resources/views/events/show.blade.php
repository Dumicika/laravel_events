@extends('layouts.event')
@section('content')
<div class="container">
    <div class="row">
      <div class="col md-6 m-auto">
             <h3>{{$event->title}}</h3>
             <h3>{{$event->description}}</h3>
             <h3>{{$event->date}}</h3>
             <h3>{{$event->location}}</h3>
      </div>
    </div>
  </div>
  @endsection