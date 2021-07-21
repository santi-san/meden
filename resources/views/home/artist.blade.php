@extends('adminlte::page')

@section('title', 'Artist name')

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
                        <img class="rounded-lg img-fluid" src="/storage/justice-band.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                    </div>
                    {{-- Data Artist --}}
                    <div class="text-wrap" >
                        <h1>Justice</h1>
                        <ul class="list-unstyled text-muted">
                            <li><span class="font-weight-bold">Member/s:</span> Gaspard Auge - Xavier de Rosnay</span></li>
                            <li><span class="font-weight-bold">Origin:</span> France</span></li>
                            <li><span class="font-weight-bold">Since:</span> 2003</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Latest Releasess --}}
            <div class="bg-white rounded-lg py-3 px-3 mt-3" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <h2>Latest Releases</h2>

                <div class="row">
                    {{-- Albums --}}
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/woman.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">Woman</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/belladone.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">belladone</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/captain.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">captain</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/safe-and-sound.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">safe-and-sound</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/vox.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">vox</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-xl-2 pb-3 ">
                        <div style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                            <div>
                                <img class="rounded-lg img-fluid" src="{{Storage::url('justice/woman-ww.jpg')}}" alt="" >
                            </div>
                            <div class="text-center  text-responsive text-truncate">
                                <a href="/artist-name" class="text-reset">woman-ww</a>
                                <p class="text-sm text-muted">01/05/2020</p>
                            </div>
                        </div>
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