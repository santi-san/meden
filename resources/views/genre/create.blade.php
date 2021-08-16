@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>inebtge</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        <h2>New Genre</h2>
    </div>
    <div class="card-body">
      <form action="{{route('genre.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('partials.GenreForm')
        <button type="submit" class="btn btn-primary mt-4">CREATE</button>
      </form>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

   <script>
    // Create slug
    $(document).ready( function() {
      $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
      });
    });
   </script>

@stop