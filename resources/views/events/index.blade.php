@extends('layouts.event')
@section('content')
    <div class="container">
        <a href="{{ route('events.create') }}" class="btn btn-success btn-sm">Adauga</a>
        <div class="row">
            <h4>Platformă de gestionare a evenimentelor</h4>
            <div class="row">
              @foreach ($events as $event)
                <div class="col-md-4">
                  <div class="card">
                    <img class="card-img-top" src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?cs=srgb&dl=pexels-sebastian-ervi-1763075.jpg&fm=jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $event->title }}</h5>
                      <p class="card-text">{{ $event->description }}</p>
                      <p class="card-text">{{ $event->date }}</p>
                      <p class="card-text">{{ $event->location }}</p>
                      <div class="d-flex justify-content-between mt-2">
                        <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('events.show', ['event' => $event->id]) }}" class="btn btn-info btn-sm">Show</a>
                        <form action="{{ route('events.destroy', ['event' => $event]) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            
            
        </div>
    </div>
    @endsection