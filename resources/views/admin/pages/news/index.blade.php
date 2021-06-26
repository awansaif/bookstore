@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">News</li>
@endsection
@section("content")
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12 mb-4">
        <h2 class="float-left">All News</h2>
        <a href="{{ Route('admin.news.create') }}" class="btn btn-primary btn-sm float-right">Add New</a>
    </div>
    <div class="col-md-12">
        <x-alert-message />
        <table id="myTable" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Featured Image</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $key => $data)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>{{$data->title}}</td>
                    <td>{{ $data->author }}</td>
                    <td> <img src="{{ $data->image }}" alt="" width="100px" height="100px"> </td>
                    <td>
                        <a href="{{ Route('admin.news.edit', $data->id) }}" class="btn btn-primary btn-sm">Update</a>
                        <form action="{{ Route('admin.news.destroy', $data->id) }}" method="post">
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
