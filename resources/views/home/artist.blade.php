@extends('adminlte::page')

@section('title', 'Artist name')

@section('content_header')
    <h6>Artist</h6>
@stop

@section('content')
    <div class="row">
        {{-- Artist --}}
        <div class="col-12 col-sm-12 col-lg-12 col-xl-12 pb-3">
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
                        <img class="rounded-lg img-fluid" src="/storage/justice-band.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                    </div>
                    {{-- Data Artist --}}
                    <div class="text-wrap" >
                        <h1>Justice no mi in porti qua revort this</h1>
                        <ul class="list-unstyled text-muted">
                            <li><span class="font-weight-bold">Member/s:</span> Gaspard Auge - Xavier de Rosnay</span></li>
                            <li><span class="font-weight-bold">Origin:</span> France</span></li>
                            <li><span class="font-weight-bold">Since:</span> 2003</span></li>
                        </ul>
                    </div>
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