@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item" aria-current="page">
    <a href="{{ Route('admin.faq.index') }}">FAQ</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Add</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.faq.store')  }}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <label for=""> Question </label>
            <input type="text" name="question" value="{{ old('question') }}" class="form-control" required>
            @error('question')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-12">
            <label for=""> FAQ Category</label>
            <select name="category" class="custom-select" required>
                <option value="" selected disabled>Choose ...</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{  old('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }} | {{ $category->id }}
                </option>
                @endforeach
            </select>
            @error('category')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-12">
            <label for="">Answer: </label>
            <textarea name="answer" class="form-control pt-2">{{ old('answer') }}</textarea>
            @error('answer')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div><br />

    <input type="submit" class="btn btn-primary" value="Save">
</form>

@endsection
