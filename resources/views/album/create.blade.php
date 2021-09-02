@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Album</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        <h2>New Album</h2>
    </div>
    <div class="card-body">
      <form action="{{route('album.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('partials.AlbumForm')
        <button type="submit" class="btn btn-primary mt-4">CREATE</button>
      </form>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

@stop

@section('js')
   <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
   {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

<script>
     /*  // Select genres
      $("#genre").select2({
               placeholder: 'select one o more options',
               allowClear: true
           }); */

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
        .create( document.querySelector( '#tracklist' ), {
        removePlugins: [ 'Heading' ],
        toolbar: [ 'bold',  'numberedList', ]
    } )
    .catch( error => {
        console.log( error );
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
