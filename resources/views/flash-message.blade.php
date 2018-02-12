@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" style="margin-top: 10px">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif



@if ($message = Session::get('error'))
<div class="alert alert-dismissible fade show alert-danger" role="alert" style="margin-top: 10px">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissable" style="margin-top: 10px">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block" style="margin-top: 10px">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger" style="margin-top: 10px">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
@endif