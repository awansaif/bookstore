@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item"><a href="{{URL::to('/admin')}}">Admin</a></li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.faq-category.index') }}">Category</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Add</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.faq-category.store') }}" method="post">
    @csrf
    <label for="">Category:</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <input type="submit" class="btn btn-primary" value="Save">
</form>

@endsection
