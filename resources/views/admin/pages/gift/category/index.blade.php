@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="#">Gift</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Category</li>
@endsection
@section("content")
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12 mb-4">
        <h2 class="float-left">All Gift Category</h2>
        <a href="{{ Route('admin.gift-category.create') }}" class="btn btn-primary btn-sm float-right">Add New
        </a>
    </div>
    <div class="col-md-12">
        <x-alert-message />
        <table id="myTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{ Route('admin.gift-category.edit',$category->id) }}"
                            class="btn btn-primary btn-sm float-left mr-2">Update
                        </a>
                        <form action="{{ Route('admin.gift-category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
