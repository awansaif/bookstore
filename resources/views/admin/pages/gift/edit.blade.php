@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard')  }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.gift.index') }}">Gift</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Update</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.gift.update', $gift->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror"
                value="{{ $gift->title }}">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Price</label>
            <input type="number" min="1" name="price" class="form-control @error('price') is-invalid @enderror"
                value="{{ $gift->price }}">

            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Stock</label>
            <input type="number" min="1" name="stock" class="form-control @error('stock') is-invalid @enderror"
                value="{{ $gift->stock }}">
            @error('stock')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-sm-6">
            <img src="{{ $gift->image }}" alt="" class="mt-1" id="imgDis" width="100px" height="100px">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <label for="">Category</label>
            <select name="category" class="form-control @error('category') is-invalid @enderror" required>
                <option value="" selected disabled>Select Category</option>
                @foreach ($categories as $category)
                @if($gift->gift_category_id)
                <option {{ $gift->gift_category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                    {{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">
                    {{ $category->name }}</option>
                @endif
                @endforeach
            </select>
            @error('category')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
            <label for=""> Image</label>
            <input type="file" name="image" id="img" class="form-control @error('image') is-invalid @enderror"
                accept="image/*">
            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="">Description</label>
            <textarea name="description"
                class="form-control @error('description') is-invalid @enderror">{{ $gift->description }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <br>

    <input type="submit" class="btn btn-primary" value="Update">
</form>

@endsection

@section('scripts')
<script>
    const img = document.querySelector("#img")
    const imgDis = document.querySelector("#imgDis")

    img.addEventListener('change', (e) => {
        let file = e.target.files[0];
        let url = URL.createObjectURL(file);

        imgDis.setAttribute('src', url)
        imgDis.classList.remove('d-none')
    });
</script>
@endsection
