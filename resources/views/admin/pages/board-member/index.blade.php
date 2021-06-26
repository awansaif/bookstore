@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Board Members</li>
@endsection

@section("content")
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-sm-12">
        <x-alert-message />
        <div class="">
            <h4 class="float-left">Board Members</h4>
            <a href="{{ Route('admin.board-member.create') }}" class="btn btn-primary float-right btn-sm mr-2">Add
                New</a>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <table id="myTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $key => $member)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        <img src="{{ $member->image }}" alt="" width="50px" height="50px">
                    </td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->designation}}</td>
                    <td>
                        <a href="{{ Route('admin.board-member.edit', $member->id) }}"
                            class="btn btn-primary btn-sm">Update</a>
                        <form action="{{ Route('admin.board-member.destroy', $member->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="deleteAlert btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
