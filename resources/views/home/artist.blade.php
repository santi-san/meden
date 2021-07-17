@extends('adminlte::page')

@section('title', 'Artist name')

@section('content_header')
    <h6>Artist</h6>
@stop

@section('content')
    <div class="row">
        {{-- Artist --}}
        <div class="col-12 col-sm-12 col-lg-6 col-xl-12 pb-3">
            <div class="bg-white rounded-lg py-3 px-3 " style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <div class="d-block d-sm-flex" style="border-radius: .3rem;">
                    <div style="max-height: 200px;width: 200px;margin-right: 16px;">
                        <img class="rounded-lg img-fluid" src="/storage/justice-band.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                    </div>
                    <div class="text-responsive text-truncate" style="width: calc(100% - 226px);">
                        <h1>Justice </h1>
                        <span class="text-sm text-truncate text-muted" style="display: block;">Member/s: Gaspard Auge / Xavier de Rosnay</span>
                        <span class="text-sm text-truncate text-muted" style="display: block;">Origin: France</span>
                        <span class="text-sm text-truncate text-muted" style="display: block;">Activity: 2003</span>

                        <i class="fas fa-heart"></i> 750
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