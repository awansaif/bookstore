@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection
@section("content")
<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-primary order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/book')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-tag float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Total Books<span class="float-right">10</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-info order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/user')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-user float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Total Authors<span class="float-right">12</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-danger order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/newsLetter')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-users float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Total NewsLetter Subscriber<span class="float-right">12</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-primary order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/orders')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-clipboard float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Total Orders<span class="float-right">12</span> <br>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-info order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/orders')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-clipboard-check float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Complete Orders <span class="float-right"> 12</span> <br>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-12 col-xl-4">
        <div class="card bg-danger order-card">
            <div class="card-body">
                <a href="{{URL::to('admin/orders')}}">
                    <h2 class="text-right text-white">
                        <i class="fa fa-clipboard-list float-left"></i><span></span>
                    </h2>
                    <p class="m-b-0 text-light">
                        Pending Orders<span class="float-right">12</span> <br>
                    </p>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
