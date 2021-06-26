@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.faq.index') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">FAQ</li>
@endsection
@section("content")
<div class="row p-3" style="background-color:white">
    <div class="col-sm-12">
        <x-alert-message />
        <h2 class="float-left">FAQS</h2>
        <a href="{{ Route('admin.faq.create') }}" class="btn btn-primary btn-sm mr-2 float-right">Add New</a>
    </div>
    <!-- Start Panel -->
    <div class="col-md-12 mt-4">
        <table id="myTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Question</th>
                    <th>Category</th>
                    <th>Opertions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $key => $faq)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->category->name }}</td>
                    <td>
                        <a href="{{URL::to('admin/faq/update')}}/{{$faq->id}}" class="btn btn-primary btn-sm">Update</a>
                        <a href="{{URL::to('admin/faq/delete')}}/{{$faq->id}}"
                            class="deleteAlert btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
