@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{URL::to('/admin/faq')}}">FAQ</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Category</li>
@endsection
@section("content")
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12">
        <h2 class="float-left">FAQ Categories</h2>
        <a href="{{ Route('admin.faq-category.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="col-md-12 mt-4">
        <table id="myTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ Route('admin.faq-category.edit', $category->id) }}"
                            class="btn btn-primary btn-sm">Update</a>
                        <form action="{{ Route('admin.faq-category.destroy', $category->id) }}" method="post">
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
