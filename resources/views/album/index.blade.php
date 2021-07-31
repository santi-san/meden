@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>index title page</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <h1>Artists</h1>
            <ul class="list-inline">
                <li class="list-inline-item">a</li>
                <li class="list-inline-item">b</li>
                <li class="list-inline-item">c</li>
                <li class="list-inline-item">d</li>
            </ul>
            @foreach ($albums as $album)

            <div>
                <img src="{{Storage::url($album->image->url)}}" alt="" style="height: 60px; width: 60px">
                <p>{{$album->name}}</p>
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(function() {
  $('.img-filter').each(function() {
    var $url = "http://meden.test/";

    var $img = $('img', this).attr('src');
    $(this).css({'background-image': 'url(' + $url + $img + ')'});
  });
});
    </script>
@stop