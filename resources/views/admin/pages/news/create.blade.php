@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.news.index') }}">News</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Add News</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.news.store')  }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Title: </label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Featured Image: </label>
            <input type="file" name="image" class="form-control" required accept="image/*">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for=""> Author </label>
            <select name="author" class="form-control" required>
                <option value="Saif ur rehman">Saif Ur Rehman</option>
            </select>
            @error('author')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Short Description: </label>
            <textarea name="short_description" class="form-control">{{ old('short_description') }}</textarea>
            @error('short_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for=""> Detail Description</label>
            <textarea name="editor1" id="" class="form-control textArea">{{ old('editor1') }}</textarea>
            @error('editor1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br />

    <input type="submit" class="btn btn-primary" value="Save">
</form>

@endsection
