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
        <a class="btn btn-secondary" href="{{route('label.create')}}">New Label</a>
    </div>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>img</th>
                <th>name</th>
                <th>country</th>
                <th>foundation</th>
                <th>description</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($labels as $label)
            <tr>
                <td>{{$label->id}}</td>
                <td><img src="{{Storage::url($label->image->url)}}" alt="" class="rounded-circle" width=30px; height=30px;></td>
                <td>{{$label->name}}</td>
                <td>{{$label->country}}</td>
                <td>{{$label->foundation}}</td>
                <td>{{$label->description}}</td>
                <td width="10px">
                    <a class="btn btn-sm btn-primary" href="{{route('label.edit', $label)}}">Editar</a>
                </td>
                <td width="10px">
                    <form method="POST" action="{{route('label.destroy', $label)}}">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" >
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