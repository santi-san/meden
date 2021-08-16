@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>inebtge</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        <h2>Update Label</h2>
    </div>
    <div class="card-body">
      <form action="{{route('label.update', $label)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('partials.LabelForm')
        <button type="submit" class="btn btn-primary mt-4">UPDATE</button>
      </form>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

   <script>
     // Create slug
     $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });

    // Editor
    ClassicEditor
      .create( document.querySelector( '#description' ) )
      .catch( error => {
          console.error( error );
      } );


    // Change image
    document.getElementById("file").addEventListener('change', changeImage);

      function changeImage(event){
          var file = event.target.files[0];

          var reader = new FileReader();
          reader.onload = (event) => {
              document.getElementById("img").setAttribute('src', event.target.result);
          };

          reader.readAsDataURL(file);
      } 
   </script>

@stop