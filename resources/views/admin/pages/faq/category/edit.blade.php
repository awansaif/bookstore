@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.faq-category.index') }}">Category</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.faq-category.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Category:</label>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control mb-2" required>
    <br>
    <input type="submit" class="btn btn-primary" value="Update">
</form>

@endsection
