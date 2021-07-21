@extends('adminlte::page')

@section('title', 'Artist name')

@section('content_header')
    <h6>Album</h6>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-12 pb-3">
            {{-- Album --}}
            <div class="bg-white rounded-lg py-3 px-3 " style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                {{-- Stadistics --}}
                <div class="py-2 px-2 d-flex" style="background: #f4f6f9; position: absolute;top: 1rem; right:  24px;">
                    <div role="button">
                        <i class="fas fa-heart fa-xs"></i> 750
                    </div >
                    <div role="button" class="ml-4">
                        <i class="fas fa-eye fa-xs"></i> 2
                    </div>
                </div>
                {{-- Album --}}
                <div class="d-block d-lg-flex">
                    {{-- Cover IMG --}}
                    <div style="max-height: 200px;width: 200px;margin-right: 16px;">
                        <img class="rounded-lg img-fluid" src="/storage/bandana_republic.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                    </div>
                    {{-- Data Album --}}
                    <div class="text-wrap" >
                        <h1>Jupiter - Bandana Republic</h1>
                        <ul class="list-unstyled text-muted">
                            <li><span class="font-weight-bold">Label:</span> Grand Blanc</span></li>
                            <li><span class="font-weight-bold">Catalog:</span> GB020CD</span></li>
                            <li><span class="font-weight-bold">Released:</span> 04-05-2015</span></li>
                            <li><span class="font-weight-bold">Genre:</span> Electronic, Pop</span></li>
                            <li><span class="font-weight-bold">Format:</span> Album</span></li>
                        </ul>
                    </div>
                </div>

            </div><!--end album -->
            <div class="bg-white rounded-lg py-3 px-3 mt-3" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <h5>Tracklist</h5>
                <ul class="list-unstyled">
                    @php
                        $tracklist = ['AV','Bandana','Celsius','Do It', '1523 Allesandro St.', 'Steady Rocking', 'Chocolate', 'EastWest', 'Tiki Nights', 'Sun, Gun, Gum']
                    @endphp

                    @foreach ($tracklist as $i => $track)
                    <li> @if($i+1 < 10) 0{{$i+1}} @else {{$i+1}} @endif – {{$track}}</li>
                        
                    @endforeach
                </ul>
            </div><!--end box -->
        </div><!--end col -->
    </div><!--end row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop