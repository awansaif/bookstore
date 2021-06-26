@extends('web.layout.web')

@section('content')
<div class="container mt-4">

    <section class=" mt-5">
        <div class="row">
            <div class="col-md-12 col-md-12 text-center">
                <h2 class="text-color mb-5">Our Latest news</h2>
                <div class="row">
                    @foreach ($news as $data)

                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="item m-3">
                            <div class="card7">
                                <img class="card-img-top" src="{{ $data->image }}" alt="Card image cap">
                                <div class="card-body border-0 text-left">
                                    <span>{{ $data->created_at->format("M d, Y")}}</span>
                                    <h5 class="card-title text-color">{{ $data->title }}</h5>

                                    <p class="card-text">{{$data->short_description}}</p>
                                    <a href="{{ Route('ShowSingleNews',$data->slug) }}">
                                        <h6>Continue Reading</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
