@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item"><a href="{{ Route('admin.dashboard')  }}">Admin</a></li>
<li class="breadcrumb-item active" aria-current="page">Change Password</li>
@endsection
@section("content")
<x-alert-message />
<form action="{{ Route('admin.updatePassword') }}" method="post">
    @csrf
    <label for="">Email:</label>
    <input type="text" name="username" value="{{ Auth::guard('admin')->user()->email }}" class="form-control"
        disabled><br>
    <label for="">Password</label>
    <input type="password" name="password" value="" class="form-control" required>
    @error('password')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <input type="submit" value="Change Password" class="btn btn-primary btn-sm">
</form>
@endsection
