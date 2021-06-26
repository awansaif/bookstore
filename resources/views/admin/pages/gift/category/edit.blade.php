@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.gift-category.index') }}">GIFT</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.gift-category.index') }}">Category</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.gift-category.update', $category->id) }}" method="post">
    @method('PUT')
    @csrf
    <label for="">Category Name </label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ $category->name }}">
    @error('name')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" class="btn btn-primary" value="Update">
</form>

@endsection
