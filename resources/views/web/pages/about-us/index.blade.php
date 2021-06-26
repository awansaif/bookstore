@extends('web.layout.web')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Nice to Meet You</h1>
            </div>
            <div class="col-md-6 col-sm-12 col-12 mt-5">
                <p class="p-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vitae maiores numquam, sapiente
                    officia magnam. Iure culpa sapiente enim iste quia saepe voluptatibus aspernatur quam. Expedita
                    corrupti non eius ab?
                </p>
                <p class="mt-5 p-color">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam obcaecati distinctio similique
                    id aliquam saepe corporis quis et sunt? Nihil ad quia obcaecati nesciunt odio reiciendis rerum animi
                    dolorum aspernatur.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-12 mt-5">
                <p class="p-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vitae maiores numquam, sapiente
                    officia magnam. Iure culpa sapiente enim iste quia saepe voluptatibus aspernatur quam. Expedita
                    corrupti non eius ab? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam obcaecati
                    distinctio similique id aliquam saepe corporis quis et sunt? Nihil ad quia obcaecati nesciunt odio
                    reiciendis rerum animi dolorum aspernatur.
                </p>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="bg-grey">
        <div class="container">
            <div class="text-center p-member">
                <h4>Board Members</h4>
                <div class="d-flex justify-content-center">
                    @foreach ($members as $member)
                    <div class="card8 m-5">
                        <img src="{{ $member->image }}" alt="featured image" class="mb-1">
                        <div class="card-body border-0 p-0 text-center">
                            <h6 class="card-title text-color">{{ $member->name }}</h6>
                            <p class="text-blue font-weight-bold" style="font-size:13px;">{{ $member->designation }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < 3; $i++):
            ?>
            <div class="col-md-4 col-sm-12 col-12 text-center p-3">
                <div class="customer-box">
                    <i class="fas fa-user-friends"></i>
                    <h3>13000</h3>
                    <h5>Happy Customers</h5>
                </div>
            </div>
            <?php endfor;?>
        </div>
    </div>
</section>
@endsection
