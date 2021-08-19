@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>index title page</h1>
@stop

@section('content')
@if ( session('mensaje') )
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('album.create')}}">New album</a>
    </div>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Catalog</th>
                <th>Released</th>
                <th>Format</th>
                <th>tracklist</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($albums as $album)
            <tr>
                <td>{{$album->id}}</td>
                <td><img src="{{Storage::url($album->image->url)}}" alt="" class="rounded-circle" width=30px; height=30px;></td>
                <td>{{$album->name}}</td>
                <td>{{$album->catalog}}</td>
                <td>{{$album->released_at}}</td>
                <td>{{$album->format}}</td>
                <td>{{$album->tracklist}}</td>
                <td width="10px">
                    <a class="btn btn-sm btn-primary" href="{{route('album.edit', $album)}}">Edit</a>
                </td>
                <td width="10px">
                    <form method="POST" action="{{route('album.destroy', $album)}}">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" >
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9">No records found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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