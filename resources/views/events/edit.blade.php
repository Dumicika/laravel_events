
@extends('layouts.event')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col md-6 m-auto">
            <form action="{{ route('events.update', ['event' => $event->id]) }}" method="post" class="mt-4">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                  @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
                  @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder="Date">
                  @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <input type="text" step="0.01" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Location">
                  @error('location')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-dark btn-sm">Edit</button>
              </form>
              
        </div>
        </div>
    </div>
  @endsection