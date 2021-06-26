@extends('web.layout.web')

@section('content')

<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="{{ env('APP_URL') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
    <div class="container vertical-tabs mt-3">
        <div class="row">

            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <ul class="nav nav-tabs" role="tablist" style="display: block">
                        @foreach ($categories as $category)
                        <li class="nav-item pb-4" style="display: block">
                            <a class="nav-link" href="{{ Route('ShowFaqPage',$category->slug) }}" data-toggle=" tab"
                                role="tab">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel"
                        aria-labelledby="v-pills-one-tab">
                        <div id="accordion" role="tablist">
                            <div class="card">
                                <div class="input-icons">
                                    <i class="fas fa-search icon"></i>
                                    <input class="input-field" type="search" placeholder="Search Topic Here">
                                </div>
                                <div class="tab-content">
                                    @foreach ($faqs as $faq)
                                    <div class="tad pb-2">
                                        <h6 class="afterIcon collapsed m-0" data-toggle="collapse"
                                            data-target="#demo-{{$faq->id}}" style="
                                            padding: 10px 10px 11px 28px; background-color:#f1f1f1">
                                            {{$faq->question}}
                                        </h6>
                                        <div id="demo-{{ $faq->id }}" class="collapse tab-pane fade show active"
                                            style="background-color:#fafafa; padding: 10px 10px 11px 28px  ">
                                            {{$faq->answer}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{--



<style>
    .tad {
        position: relative;
    }

    .tad .afterIcon:after {
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-size: 20px;
        color: #a29f9f52;
        border: none;
        position: absolute;
        top: 10px;
        right: 20px;
        display: inline-block;
        font-weight: 900;
        -webkit-transition: 0.15s ease-in-out;
        transition: 0.15s ease-in-out;
    }

    .afterIcon.collapsed:after {
        transform: rotate(-180deg);
    }
</style> --}}

@endsection
