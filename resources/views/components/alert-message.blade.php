@if(Session::has('message'))
<div class="alert alert-success">
    <span class="font-weight-bold">
        {{ Session::get('message') }}
    </span>
</div>
@endif
