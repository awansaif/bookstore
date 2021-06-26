<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-purple">
                <div>
                    <h5 class="f-27 ">
                        Subscribe To Our Newsletter For Newest Books Updates
                    </h5>
                </div>
                <form action="{{URL::to('newsletterSubscription')}}" method="post">
                    <div class="input-group input-control justify-content-center subcribeLater">
                        <input type="email" name="email" class="" placeholder="Type Your Mail Here" required>
                        <div class="input-group-append">
                            <button class="btn btn-white" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="footer mt-100">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <h5 class="headin5_amrc col_white_amrc pt2">
                    <img src="{{ asset('assests/img/logo.png') }}" width="100px" alt="">
                </h5>
                <!--headin5_amrc-->
                <p class="mb10">{!! \App\Models\SiteProfile::pluck('description')->first() !!}</p>
                <h5 class="headin5_amrc col_white_amrc pt2"></h5>
                <div class="d-flex icone-inline">
                    <ul class="li mb-0">
                        <a href="{{ \App\Models\SiteProfile::pluck('facebook')->first() }}"
                            class="GetInTounchanchorStyle">
                            <i class="fab fa-facebook-f mr-3"></i>
                        </a>
                    </ul>
                    <ul class="li mb-0">
                        <a href="{{ \App\Models\SiteProfile::pluck('Twitter')->first() }}"
                            class="GetInTounchanchorStyle">
                            <i class="fab fa-twitter mr-3"></i>
                        </a>
                    </ul>
                    <ul class="li mb-0">
                        <a href="{{ \App\Models\SiteProfile::pluck('Instagram')->first() }}"
                            class="GetInTounchanchorStyle">
                            <i class="fab fa-instagram mr-3"></i>
                        </a>
                    </ul>
                    <ul class="li mb-0">
                        <a href="{{ \App\Models\SiteProfile::pluck('Youtube')->first() }}"
                            class="GetInTounchanchorStyle text-danger">
                            <i class="fab fa-youtube mr-3"></i>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <h5 class="pt2">Books Categories</h5>
                <div class="row">
                    <div class="col-5">
                        <ul>
                            {{-- @php $i = 1; @endphp
                            @foreach($AllBookCategories as $bookCat)
                            <li><a href="{{URL::to('all-book')}}">{{$bookCat->name}}</a></li>
                            @if($i == 7) --}}
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul>
                            {{-- @endif
                            @php $i++ @endphp
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                <h5 class="pt2">Quick Links</h5>
                <div class="row">
                    <div class="col-10">
                        <ul>
                            {{-- @foreach ($MainMenu as $menu)
                            <li>
                                <a class="" href="{{URL::to('')}}/{{$menu->link}}">{{$menu->name}}</a>
                            </li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class=" col-lg-3 col-md-3 col-sm-12 col-12">
                <h5 class="headin5_amrc col_white_amrc pt2">{{ \App\Models\SiteProfile::pluck('title')->first() }}</h5>
                <div class="row">
                    <div class="col-10">
                        <ul>
                            <li>
                                <a href="#">
                                    {!! \App\Models\SiteProfile::pluck('location')->first() !!}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-address-card mr-3"></i>
                                    {{ \App\Models\SiteProfile::pluck('address')->first() }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-envelope mr-3"></i>
                                    {{ \App\Models\SiteProfile::pluck('email')->first() }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-mobile mr-3"></i>
                                    {{ \App\Models\SiteProfile::pluck('mobile')->first() }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="">Copyright @2021 | Designed With by <a href="#">Book Store Website</a></p>
    </div>
</footer>
