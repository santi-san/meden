@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>inebtge</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        <h2>Update Album</h2>
    </div>
    <div class="card-body">
      {!! Form::open($album,['route' => 'album.update', 'automcomplete' => 'off', 'files' => true]) !!}
    
        @include('partials.AlbumForm')

        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        {{--<button type="submit" class="btn btn-primary mt-4">UPDATE</button>
       </form> --}}
       {!! Form::close() !!}
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