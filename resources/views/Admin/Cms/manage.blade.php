@extends('Admin.Layouts.master')

@section('content')
    <div class="right_col" role="main">
        @include('Admin.Common.dashboard_title',['data'=>'Manage Pages'])

        <div class="clearfix"></div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-magic"></i></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>


                    <div class="x_content">


                        <div class="x_title">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="table_columns">
                                        @foreach($columns as $key => $column)
                                            <li><input {{$column==true ? 'checked' : ''}} type="checkbox"
                                                       class="iSquare"> {{ucwords(str_replace('_',' ',ucfirst($key)))}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-sm-2">
                                    <form action="" class="form-inline">
                                        <label for="">Items</label>
                                        <input type="text" class="form-control form-xs"
                                               value="{{count($pages)< Config('admin.limit') ? count($pages) : Config('admin.limit')}}">
                                    </form>
                                </div>

                                <div class="col-sm-4">
                                    <form action="" class="form-inline">
                                        <label for="">Filter</label>
                                        <select name="" class="form-control form-xs-height" id="">
                                            <option value="">Date</option>
                                            <option value="">Title</option>
                                        </select>
                                        <select name="" class="form-control form-xs-height" id="">
                                            <option value="">Asc</option>
                                            <option value="">Desc</option>
                                        </select>
                                        <input type="submit" value="Filter" class="btn btn-primary btn-xs">
                                    </form>
                                </div>

                                <div class="col-sm-4 pull-right">
                                    <form action="" class="form-inline">
                                        <input type="text" placeholder="Search" class="form-control form-xs-height">
                                        <input type="submit" value="Search" class="btn btn-primary btn-xs">
                                    </form>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>


                        <div class="basic_setting">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="bulk_action">
                                        <form action="" class="form-inline">
                                            <select name="" id="" class="form-control form-xs-height">
                                                <option value="" disabled selected>Bulk Action</option>
                                            </select>
                                            <input type="button" class="btn btn-default btn-xs" value="Apply">
                                        </form>
                                    </div><!--end of div bulk_action-->
                                </div>
                                <div class="col-sm-6 text-right">
                                    <br>
                                    <span class="total_item"><strong>ALL</strong> {{count($pages)}}</span> &nbsp;&nbsp;| &nbsp;&nbsp;<strong>Published</strong> <span class="published_item">{{count($published)}}</span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th width="3%"><input class="iSquare" type="checkbox" id="check_all"></th>
                                <th width="45%">Title</th>
                                <th>Author</th>
                                <th width="20%">Tags</th>
                                <th width="5%"><i class="fa fa-comment fa-2x"></i></th>
                                <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td><input type="checkbox" class="iSquare" name="pageID[]" value="{{$page['id']}}">
                                    </td>
                                    <td><a href="">{{ucfirst($page['title'])}}</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of div right-->
@endsection