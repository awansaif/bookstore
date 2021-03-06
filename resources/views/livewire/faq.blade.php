<div class="container vertical-tabs mt-3">
    <div class="row">

        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <ul class="nav nav-tabs" role="tablist" style="display: block">
                    @foreach ($categories as $category)
                    <li class="nav-item pb-4" style="display: block">
                        <a class="nav-link {{$ict == 1 ? 'active' : ''}}" data-toggle="tab" href="#tabs-{{$ict}}"
                            role="tab">{{$cate->name}}</a>
                    </li>
                    @endforeach
                </ul>
                {{-- <a class="nav-link active" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Overview of Just Energy</a>
            <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">Just Energy in California</a>
            <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Just Energy In Delaware</a> --}}
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
                                {{-- @php $ict = 1; @endphp
                                    @foreach ($totalCategory as $cat)
                                    @php $totalEnterCat = $cat->GetEntities() ; @endphp
                                    @if (count($totalEnterCat) > 0)
                                    <div class="tab-pane {{$ict == 1 ? 'active' : ''}}" id="tabs-{{$ict}}"
                                role="tabpanel">
                                @php $ict1 = 1; @endphp
                                @foreach ($totalEnterCat as $data)
                                <div class="tad pb-2">
                                    <h6 class="afterIcon collapsed m-0" data-toggle="collapse"
                                        data-target="#demo-{{$ict1}}" style="
                                        padding: 10px 10px 11px 28px; background-color:#f1f1f1">
                                        {{$data->ques}}
                                    </h6>
                                    <div id="demo-{{$ict1}}" class="collapse tab-pane fade show active"
                                        style="background-color:#fafafa; padding: 10px 10px 11px 28px  ">
                                        {{$data->ans}}
                                    </div>
                                </div>
                                @php $ict1++; @endphp
                                @endforeach
                            </div>
                            @endif
                            @php $ict++; @endphp
                            @endforeach --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
