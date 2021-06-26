@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.board-member.index') }}">Board Member</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.board-member.update', $member->id) }}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $member->name }}">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for=""> Designation</label>
            <input type="text" name="designation" class="form-control" value="{{ $member->designation }}">
            @error('designation')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for=""> Image</label>
            <br>
            <img src="{{ $member->image }}" alt="" width="100px" height="100px">
            <input type="file" name="image" class="form-control mt-2" accept="image/*" e>
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <input type="submit" class="btn btn-primary mt-3" value="Update">
</form>

@endsection
