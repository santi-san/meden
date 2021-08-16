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
        <a class="btn btn-secondary" href="{{route('genre.create')}}">New Genre</a>
    </div>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>slug</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genres as $genre)
            <tr>
                <td>{{$genre->id}}</td>
                <td>{{$genre->name}}</td>
                <td>{{$genre->slug}}</td>
                
                <td width="10px">
                    <a class="btn btn-sm btn-primary" href="{{route('genre.edit', $genre)}}">Edit</a>
                </td>
                <td width="10px">
                    <form method="POST" action="{{route('genre.destroy', $genre)}}">
                        {{ method_field('DELETE') }}
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm" >
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No records found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop