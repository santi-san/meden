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
        <a class="btn btn-secondary" href="{{route('artist.create')}}">Nuevo Artista</a>
    </div>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cover</th>
                <th>Name</th>
                <th>members</th>
                <th>country</th>
                <th>foundation</th>
                <th>description</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($artists as $artist)
            <tr>
                <td>{{$artist->id}}</td>
                <td><img src="{{Storage::url($artist->image->url)}}" alt="" class="rounded-circle" width=30px; height=30px;></td>
                <td>{{$artist->name}}</td>
                <td>{{$artist->members}}</td>
                <td>{{$artist->country}}</td>
                <td>{{$artist->foundation}}</td>
                <td>{{$artist->description}}</td>
                <td width="10px">
                    <a class="btn btn-sm btn-primary" href="{{route('artist.edit', $artist)}}">Edit</a>
                </td>
                <td width="10px">
                    <form method="POST" action="{{route('artist.destroy', $artist)}}">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" >
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">No records found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
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