@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Profile</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.site-profile.store') }}" method="post">
    @csrf
    <h2 class="m-2">BASIC</h2>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <label for="">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $profile->title }}">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="">Address:</label>
            <input type="address" name="address" class="form-control" value="{{ $profile->address }}">
            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $profile->email }}">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Mobile: </label>
            <input type="text" name="mobile" class="form-control" value="{{ $profile->mobile }}">
            @error('mobile')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <hr>
    <h2 class="m-2 text-capitalize">SOCIAL PLATFORMS</h2>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <label for="">Facebook:</label>
            <input type="url" name="facebook" class="form-control" value="{{ $profile->facebook }}">
            @error('facebook')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="">Twitter:</label>
            <input type="url" name="twitter" class="form-control" value="{{ $profile->Twitter }}">
            @error('twitter')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Instagram:</label>
            <input type="url" name="instagram" class="form-control" value="{{ $profile->Instagram }}">
            @error('instagram')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">YouTube: </label>
            <input type="url" name="youtube" class="form-control" value="{{ $profile->Youtube }}">
            @error('youtube')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <hr>
    <h2 class="m-2">Location</h2>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Google Map:</label>
            <br>
            {!! $profile->location !!}
            <input type="text" name="location" class="form-control" value="{{ $profile->location }}">
            @error('location')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <hr>
    <h2 class="m-2">DESCRIPTION</h2>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Description</label>
            <textarea name="editor1" class="form-control">{{ $profile->description }}</textarea>
            @error('editor1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <input type="submit" class="btn btn-primary mt-5" value="Update">
</form>

@endsection


@section('scripts')

<script>
    const bookType = document.querySelector(".typeId");
    const bookFile = document.querySelector("#bookFile")
    const file = document.querySelector(".file")
    bookType.addEventListener('change',() => {
        if(bookType.value == 1)
        {
           bookFile.classList.remove('d-none');
           file.removeAttribute('disabled');
        }else{
            file.setAttribute('disabled', true);
            bookFile.classList.add('d-none');
        }
    });
</script>
@endsection
