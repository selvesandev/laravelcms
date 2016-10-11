
@if(isset($error))
    <div class="col-md-12 alert alert-danger">
        <p class="text text-white text-bold"><i class="fa fa-times"></i>
            {{trans('message.error',['e'=>$error])}}
        </p>
    </div>
@endif

@if (isset($success))
    <div class="col-md-12 alert alert-success">
        <p class="text text-white text-bold">
            <i class="fa fa-check"></i> {{$success}}
        </p>
    </div>
@endif

@if (isset($info))
    <div class="col-md-12 alert alert-info">
        <p class="text text-white text-bold">
            <i class="fa fa-check"></i> {{$info}}
        </p>
    </div>
@endif

@if (isset($warning))
    <div class="col-md-12 alert alert-danger">
        <p class="text text-white text-bold">
            <i class="fa fa-times"></i> {{$warning}}
        </p>
    </div>
@endif
