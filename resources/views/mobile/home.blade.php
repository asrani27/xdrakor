@extends('mobile.app')

@section('content')
{{-- <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fa fa-bullhorn"></i> Perhatian!</h5>
    Selamat datang di xdrakor, nonton sepuasnya tanpa iklan. Support kami agar tetap bisa memberikan anda kenyamanan
    maksimal.
</div> --}}
<div class="p-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-lg font-weight-bold">BARU UPDATE</span>
        <a href="" class="text-warning" style="white-space: nowrap;">Selengkapnya</a>
    </div>
    <div class="d-flex overflow-auto" style="gap: 0.5rem;">
        @foreach (topmovie() as $item)
        <div style="min-width: 7rem; max-width: 180px;" class="flex-shrink-0">
            <div class="card card-widget widget-user">
                <a href="/movie/{{$item->slug}}">
                    <div class="widget-user-header text-white text-right"
                        style="background: url('{{$item->image}}') center center; background-size:cover; height:11rem; border-radius:.25rem; padding:0px; box-shadow: -1px -53px 89px 2px rgba(0,0,0,0.8) inset;">
                        <div class="d-flex justify-content-between">
                            <span class="badge bg-gradient-purple" style="padding:6px 6px; font-size:10px">
                                <i class="fa fa-star"></i> {{$item->imdb}} </span>
                            <span class="badge bg-gradient-purple"
                                style="padding:6px 6px; font-size:10px">{{$item->quality}}</span>
                        </div>
                        @include('mobile.title')
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{-- <div class="p-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-lg font-weight-bold"> DRAKOR ONGOING</span>
        <a href="" class="text-warning" style="white-space: nowrap;">Selengkapnya</a>
    </div>
    <div class="d-flex overflow-auto" style="gap: 0.5rem;">
        @foreach (topmovie() as $item)
        <div style="min-width: 8rem; max-width: 180px;" class="flex-shrink-0">
            <div class="card card-widget widget-user">
                <a href="/movie/{{$item->slug}}">
                    <div class="widget-user-header text-white text-right"
                        style="background: url('{{$item->image}}') center center; background-size:cover; height:11rem; border-radius:.25rem; padding:0px; box-shadow: -1px -53px 89px 2px rgba(0,0,0,0.8) inset;">
                        <div class="d-flex justify-content-between">
                            <span class="badge bg-gradient-purple" style="padding:6px 6px; font-size:10px">
                                <i class="fa fa-star"></i> {{$item->imdb}} </span>
                            <span class="badge bg-gradient-purple"
                                style="padding:6px 6px; font-size:10px">{{$item->quality}}</span>
                        </div>
                        @include('mobile.title')
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="p-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-lg font-weight-bold"> FILM INDO</span>
        <a href="" class="text-warning" style="white-space: nowrap;">Selengkapnya</a>
    </div>
    <div class="d-flex overflow-auto" style="gap: 0.5rem;">
        @foreach (latestSeries() as $item)
        <div style="min-width: 8rem; max-width: 180px;" class="flex-shrink-0">
            <div class="card card-widget widget-user">
                <a href="/movie/{{$item->slug}}">
                    <div class="widget-user-header text-white text-right"
                        style="background: url('{{$item->image}}') center center; background-size:cover; height:11rem; border-radius:.25rem; padding:0px; box-shadow: -1px -53px 89px 2px rgba(0,0,0,0.8) inset;">
                        <div class="d-flex justify-content-between">
                            <span class="badge bg-gradient-purple" style="padding:6px 6px; font-size:10px">
                                <i class="fa fa-star"></i> {{$item->imdb}} </span>
                            <span class="badge bg-gradient-purple"
                                style="padding:6px 6px; font-size:10px">{{$item->quality}}</span>
                        </div>
                        @include('mobile.title')
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="p-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="text-lg font-weight-bold"> DRAMA CHINA </span>
        <a href="" class="text-warning" style="white-space: nowrap;">Selengkapnya</a>
    </div>
    <div class="d-flex overflow-auto" style="gap: 0.5rem;">
        @foreach (topmovie() as $item)
        <div style="min-width: 8rem; max-width: 180px;" class="flex-shrink-0">
            <div class="card card-widget widget-user">
                <a href="/movie/{{$item->slug}}">
                    <div class="widget-user-header text-white text-right"
                        style="background: url('{{$item->image}}') center center; background-size:cover; height:11rem; border-radius:.25rem; padding:0px; box-shadow: -1px -53px 89px 2px rgba(0,0,0,0.8) inset;">
                        <div class="d-flex justify-content-between">
                            <span class="badge bg-gradient-purple" style="padding:6px 6px; font-size:10px">
                                <i class="fa fa-star"></i> {{$item->imdb}} </span>
                            <span class="badge bg-gradient-purple"
                                style="padding:6px 6px; font-size:10px">{{$item->quality}}</span>
                        </div>
                        @include('mobile.title')
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}
@endsection