<div class="row">
    <div class="col-md-12">
        <div class="mainPage">
            <div class="sidebar">
                <div class="parent-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Category Option</h3>
                        </div>
                    </div>
                    <ul class="faq">
                        <div>
                            <li>
                                <div class="sort1">
                                    <h6 class="">
                                        <a href="{{ url('gift') }}" class="pl-4 text-dark">ALL
                                        </a>
                                    </h6>
                                    @foreach ($categories as $category)
                                    <h6 class="">
                                        <a href="{{ url('gift', $category->slug) }}"
                                            class="pl-4 text-dark">{{ $category->name }}
                                        </a>
                                        <small class="text-danger">({{ $category->gifts_count }})</small>
                                    </h6>
                                    @endforeach

                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="window_panel">
                @foreach ($gifts as $gift)
                <div class="product">
                    {{-- <a href="{{URL::to('/book-detail')}}/<%product.id%>"> --}}
                    <img src="{{ $gift->image }}" alt="" width="150px" height="200px">
                    {{-- </a> --}}
                    <br>
                    <div ng-hide="changeText">
                        <h6>{{ $gift->title }}</h6>
                        </p>{{ $gift->category? $gift->category->name : ''  }}</p>
                        {{-- <p>
                                    @for ($i=0;$i < 5; $i++) <i
                                        class="fa fa-star <% {{$i}} < product.rating ? 'text-warning' : '' %>"></i>
                            @endfor
                            </p> --}}
                    </div>
                    <div>
                        <p>
                            {{ $gift->price }}
                            <span class="text-dull"><s>{{ $gift->price*1.2 }}</s></span>
                        </p>
                        <div class="btn btn-primary btn-sm AddToCart" productPrice="{{ $gift->price }}"
                            productType="gift" productid="{{ $gift->id }}">Add To Cart
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        {{-- {{ $gifts->links() }} --}}
    </div>
</div>
