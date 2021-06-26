@extends('web.layout.web')

@section('content')
<style>
    .bg-map iframe {
        background: linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255, 1)) !important;
        background-size: cover;
        background-repeat: no-repeat;
        height: 300px;
        width: 100%;
    }
</style>

<div class="bg-map">

    {!! \App\Models\SiteProfile::pluck('location')->first() !!}

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card8 shadow p-5">
                <h4 class="text-center">WE ARE HAPPY TO HEAR FROM YOU</h4>
                @livewire('contact-u-s')
            </div>
        </div>
    </div>
</div>
@endsection
