@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Gift</li>
@endsection
@section("content")

<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12 mb-3">
        <h2 class="float-left">All Gifts</h2>
        <a href="{{ Route('admin.gift.create') }}" class="btn btn-primary btn-sm float-right  mr-2">Add New</a>
    </div>
    <div class="col-sm-12">
        <x-alert-message />
        <div class="table-responsive" style="width:100%; overflow:hidden;  overflow-x: scroll;">
            <table id="myTable" class="table table-striped table-bordered border-collapse table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th class="none">Opertions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gifts as $key => $gift)
                    <tr>
                        <td>
                            <input type="checkbox" name="feature[]" value="{{$gift->id}}">
                            {{ $key + 1}}
                        </td>
                        <td>{{$gift->title}}</td>
                        <td>{{ $gift->category? $gift->category->name : '' }}</td>
                        <td><img src="{{ $gift->image }}" alt="" width="50px" height="50px"></td>
                        <td>{{ $gift->price }}</td>
                        <td>{{$gift->stock}}</td>
                        <td>{{ $gift->description }}</td>
                        <td>{{ $gift->status? 'Active' : '' }}</td>
                        <td>
                            <br>
                            <a href="{{ Route('admin.gift.edit', $gift->id) }}"
                                class="btn btn-primary btn-sm float-left">Update</a>
                            <form action="{{ route('admin.gift.destroy', $gift->id) }}" class="float-left"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">REMOVE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
