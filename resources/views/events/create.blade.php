@extends('layouts.event')
@section('content')
<div class="container">
  <div class="row">
    <div class="col md-6 m-auto">
           <form action="{{route('events.store') }}" method="post" class="mt-4">
            @csrf 
            <div class="mb-3">
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="description" class="form-control @error('descirption') is-invalid @enderror" placeholder="description">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder="date">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" step="0.01" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="location">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-sm">Save</button>
        </form>
    </div>
  </div>
</div>
@endsection