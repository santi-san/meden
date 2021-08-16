@extends('adminlte::page')

@section('title', $artist->name)

@section('content_header')
    <h6>Artist</h6>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-12 pb-3">
            {{-- Artist --}}
            <div class="bg-white rounded-lg py-3 px-3 " style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                {{-- stadistics --}}
                <div class="py-2 px-2 d-flex" style="background: #f4f6f9; position: absolute;top: 1rem; right:  24px;">
                    <div role="button">
                        <i class="fas fa-heart fa-xs"></i> 750
                    </div >
                    <div role="button" class="ml-4">
                        <i class="fas fa-eye fa-xs"></i> 2
                    </div>
                </div>
                {{-- Artist --}}
                <div class="d-block d-lg-flex">
                    {{-- Cover IMG --}}
                    <div style="max-height: 200px;width: 200px;margin-right: 16px;">
                        <img class="rounded-lg img-fluid" src="{{Storage::url($artist->image->url)}}" alt="{{$artist->name}}" style="height: 100%;object-fit: cover;width: 100%;">
                    </div>
                    {{-- Data Artist --}}
                    <div class="text-wrap" >
                        <h1>{{$artist->name}}</h1>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <span class="font-weight-bold">Member/s:</span>
                                    @php
                                        $members = explode(" ", $artist->members);
                                    @endphp
                                    @foreach ($members as $member)
                                        <a href="{{route('artist.show', $member)}}">{{$member}}</a>@if ( !$loop->last ) -@endif
                                    @endforeach
                                </span>
                            </li>
                            <li><span class="font-weight-bold">Origin:</span> {{$artist->country}}</span></li>
                            <li><span class="font-weight-bold">Since:</span> {{$artist->foundation}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Latest Releasess --}}
            <div class="bg-white rounded-lg py-3 px-3 mt-3" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <h2>Latest Releases</h2>

                <div class="row">
                    {{-- Albums --}}
                    @foreach ($artist->albums as $item)
                    
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div>
                            <div>
                                <img class="rounded-lg-top img-fluid" src="{{Storage::url(($item->image->url))}}" alt="" >
                            </div>
                            <div class="shadow-xs text-center text-responsive text-truncate">
                                <a href="{{route('album.show', $item->slug)}}" class="text-reset">{{$item->name}}</a>
                                <p class="text-sm text-muted">{{$artist->foundation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop