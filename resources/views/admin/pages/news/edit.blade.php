@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.news.index') }}">News</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update News</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.news.update', $news->id)  }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Title: </label>
            <input type="text" name="title" value="{{ $news->title }}" class="form-control" required>
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Featured Image: </label>
            <br>
            <img src="{{ $news->image }}" alt="" width="60px" height="60px">
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for=""> Author </label>
            <select name="author" class="form-control" required>
                <option value="Saif ur rehman" {{ $news->author == 'Saif ur rehman'? 'selected' : '' }}>Saif Ur Rehman
                </option>
            </select>
            @error('author')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Short Description: </label>
            <textarea name="short_description" class="form-control">{{ $news->short_description }}</textarea>
            @error('short_description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for=""> Detail Description</label>
            <textarea name="editor1" id="" class="form-control textArea">{{ $news->detail_description }}</textarea>
            @error('editor1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <br />

    <input type="submit" class="btn btn-primary" value="Update">
</form>

@endsection
