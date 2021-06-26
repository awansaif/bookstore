@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.testimonial.index') }}">Testimonial</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update Testimonial</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.testimonial.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $testimonial->name}}" required>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Designation</label>
            <input type="text" name="designation" class="form-control" value="{{ $testimonial->designation }}" required>
            @error('designation')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Image</label>
            <br>
            <img src="{{ $testimonial->image }}" alt="" width="50px" height="50px">
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Rating</label>
            <select name="rating" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            @error('rating')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Description</label>
            <textarea name="editor1" class="form-control">{{ $testimonial->message }}</textarea>
            @error('editor1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <input type="submit" class="btn btn-primary mt-4" value="Update">
</form>

@endsection
