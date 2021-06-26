@extends("admin.layout.admin")
@section("breadcrumb")
<li class="breadcrumb-item">
    <a href="{{ Route('admin.dashboard') }}">Admin</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Orders</li>
@endsection

@section("content")
<div class="row p-3" style="background-color:white">
    <div class="col-md-12">
        <x-alert-message />
    </div>
</div>
<div class="row p-3" style="background-color:white">
    <!-- Start Panel -->
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h2>All PDF Orders</h2>
        </div><br>
        <table id="myTable" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Pages</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Qty</th>
                    <th>PDF File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->pages }} </td>
                    <td>{{ $item->size  }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>
                        <a href="{{ asset($item->file) }}" target="_blank">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
