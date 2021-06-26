@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Testimonial</li>
@endsection
@section("content")
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12 mb-3">
        <x-alert-message />
        <div class="">
            <h2 class="float-left">Testimonial</h2>
            <a href="{{ Route('admin.testimonial.create') }}" class="btn btn-primary btn-sm float-right">Add
                New</a>
        </div><br>
    </div>
    <div class="col-sm-12">
        <table id="myTable" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $key => $testimonial)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>{{$testimonial->name}}</td>
                    <td>{{$testimonial->designation}}</td>
                    <td>
                        <img src="{{ $testimonial->image }}" alt="" width="100px" height="100px">
                    </td>
                    <td>
                        <a href="{{ Route('admin.testimonial.edit', $testimonial->id) }}"
                            class="btn btn-primary btn-sm">Update</a>
                        <form action="{{ Route('admin.testimonial.destroy', $testimonial->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm deleteAlert">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
