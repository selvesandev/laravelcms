@if(count($errors))
    <div class="col-md-12 alert alert-danger">
        <ul class="list list-group">
            @foreach($errors->all() as $error)
                <li class="error text text-white text-bold"><i class="fa fa-times"></i> Error: {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif