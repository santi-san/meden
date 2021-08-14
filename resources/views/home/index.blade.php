@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>index title page</h1>
@stop

@section('content')
    <div class="row">
        {{-- Top Artists
         <div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP ARTISTS</span>
                        <span class="text-xs">(This week)</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('justice-band.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">Justice</a>
                                <p class="text-sm text-muted">157 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('deepdish.png')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">Deep Dish</a>
                                <p class="text-sm text-muted">154 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('mgmt.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">MGMT</a>
                                <p class="text-sm text-muted">130 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('heize.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">Heize</a>
                                <p class="text-sm text-muted">128 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('cattaneo.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">Hernan Cattaneo</a>
                                <p class="text-sm text-muted">112 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('jupiter.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="kard-link font-weight-bold">Jupiter </a>
                                <p class="text-sm text-muted">75 views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP ARTISTS</span>
                        <span class="text-xs">(This week)</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    @foreach ($artists as $artist)
                    
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                 <img class="rounded-lg img-fluid img-index" src="{{Storage::url($artist->image->url)}} "
                                alt="{{$artist->name}}"> 
                            </div>
                            
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="{{route('artist.show', $artist->slug)}}" class="kard-link font-weight-bold">{{ $artist->name }}</a>
                                <p class="text-sm text-muted">{{$artist->country}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Top ALBUMS 
        <div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP ALBUMS</span>
                        <span class="text-xs">(This week)</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('cross.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/album-name" class="text-reset font-weight-bold">Cross</a>
                                <p class="text-sm text-muted">157 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('say_hello_album.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/album-name" class="text-reset font-weight-bold">Say Hello</a>
                                <p class="text-sm text-muted">154 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class=" rounded-lg img-fluid img-index" src="{{Storage::url('planisphere.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/album-name" class="text-reset font-weight-bold">Planisphere</a>
                                <p class="text-sm text-muted">130 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('flashdance.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/album-name" class="text-reset font-weight-bold">FlashDance</a>
                                <p class="text-sm text-muted">128 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('bandana_republic.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/album-name" class="text-reset font-weight-bold">Bandana</a>
                                <p class="text-sm text-muted">112 views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url('Noze_Dring.jpg')}}" alt="" >
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="/artist-name" class="text-reset font-weight-bold">Dring</a>
                                <p class="text-sm text-muted">75 views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP ALBUMS</span>
                        <span class="text-xs">(This week)</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    @foreach ($albums as $album)
                    <div class="col-2 col-sm-2 col-lg-3 col-xl-2 ">
                        <div class="kard">
                            <div class="img-filter rounded-lg">
                                <img class="rounded-lg img-fluid img-index" src="{{Storage::url($album->image->url)}}" alt="{{$album->name}}">
                            </div>
                            <div class="text-center text-responsive text-truncate mt-3">
                                <a href="{{route('album.show', $album->slug)}}" class="kard-link font-weight-bold">{{$album->name}}</a>
                                <p class="text-truncate text-sm text-muted">{{ $album->artist->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- LATEST RELEASES 
        <div class="col-12 col-sm-12 col-lg-12 col-xl-10 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between mb-3 ">
                    <div>
                        <span class="title">LATEST RELEASES</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div  style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg" src="/storage/latest/gui-renaissance.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive text-truncate" style="width: calc(100% - 86px);align-self: center;">
                                Renaissance - The Mix Collection
                                    <span class="text-sm text-truncate text-muted" style="display: block;">Gui Boratto</span>
                        </div>  
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/cross.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive" style="width: calc(100% - 86px);align-self: center;">
                                Cross †
                                <span class="text-sm text-truncate text-muted" style="display: block;">Justice</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/say_hello_album.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive" style="width: calc(100% - 86px);align-self: center;">
                                Say Hello
                                    <span class="text-sm text-muted" style="display: block;">Deep Dish</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="storage/bandana_republic.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                Bandana
                                    <span class="text-sm text-muted" style="display: block;">Jupiter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/planisphere.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                Planisphere
                                    <span class="text-sm text-muted" style="display: block;">Justice</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/flashdance.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                Flash Dance
                                    <span class="text-sm text-muted" style="display: block;">Deep Dish</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/Noze_Dring.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                Dring
                                    <span class="text-sm text-muted" style="display: block;">Nôze</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/latest/shesfine.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                She's Fine
                                    <span class="text-sm text-muted" style="display: block;">Heize</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <div class="bg-latest rounded-lg d-flex">
                            <div style="height: 60px;width: 60px;margin-right: 16px;">
                                <img class="rounded-lg img-fluid" src="/storage/latest/congratulations.jpg" alt="" style="height: 100%;object-fit: cover;width: 100%;">
                            </div>

                            <div class="text-responsive " style="width: calc(100% - 86px);align-self: center;">
                                Congratulations
                                    <span class="text-sm text-muted" style="display: block;">MGMT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="col-12 col-sm-12 col-lg-12 col-xl-10 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between mb-3 ">
                    <div>
                        <span class="title">LATEST RELEASES</span>
                    </div>
                    <div>See All</div>
                </div>
                <div class="row">
                    @foreach ($albums as $album)
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 pb-2">
                        <a href="{{route('album.show', $album->slug)}}">
                            <div class="bg-latest rounded-lg d-flex">
                                <div style="height: 60px;width: 60px;margin-right: 16px;">
                                    <img class="rounded-lg" src="{{Storage::url($album->image->url)}}" alt="{{$album->name}}" style="height: 100%;object-fit: cover;width: 100%;">
                                </div>
                                <div class="text-responsive text-truncate" style="width: calc(100% - 86px);align-self: center;">
                                    {{$album->name}}
                                    <object><a href="{{route('artist.show', $album->artist->slug)}}">
                                    <span class="text-sm text-truncate text-muted" style="display: block;">{{$album->artist->name}}</span>
                                    </a></object>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Genres 
        <div class="col-12 col-sm-12 col-lg-12 col-xl-2 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP GENRES</span>
                    </div>
                    <div>See All</div>
                </div>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Minimal</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">House</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Dance</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Electronic</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Jazz</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Kpop</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Pop</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Chill</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Drum and Bass</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Progressive</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Electronic</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Jazz</p>
                <p class="px-2 py-2 mb-2 d-inline-block bg-white rounded-lg">Kpop</p>
                
            </div>
        </div>--}}
        <div class="col-12 col-sm-12 col-lg-12 col-xl-2 mb-3">
            <div class="shadow-xs rounded-lg py-3 px-3 light-bg">
                <div class="d-flex justify-content-between pb-3">
                    <div>
                        <span class="title">TOP GENRES</span>
                    </div>
                    <div>See All</div>
                </div>
                @foreach ($genres as $genre)
                    <p class="px-2 py-2 mb-2 d-inline-block bg-latest rounded-lg">{{$genre->name}}</p>
                @endforeach
                
            </div>
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